<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Ramsey\Uuid\v1;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['jobs'] = Job::all();
        return view('jobs.applied-job',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.post-job');
    }

    // Created Job for UI
    public function created()
    {
        $jobs = Job::all();
        return view('jobs.created-job',compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Job::create($request->all());
        return redirect()->route('jobs.createdJob')->with('success','Job posted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $input = $request->except('logo');
        if ($job->logo && $request->hasFile('logo')) {
            Storage::delete('public/jobs/logo/' . $job->logo);
            $job->logo = null;
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = $job->id . '-' . $job->job_title . '-' . date('Ymd') . '.' . $logo->getClientOriginalExtension();
            $logo->storeAs('public/jobs/logos', $filename);
            $job->logo = $filename;
            $job->save();
        }
        $job->update($input);
        return redirect()->route('jobs.createdJob')->with('success', 'Job Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.appliedJob')->with('success','Job Deleted Successfully');
    }
}
