<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Resume;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ResumeController extends Controller
{

    public function edit(Resume $resume)
    {
        $countries = Country::select('name')->get();
        $states = State::select('name')->get();
        $cities = City::select('name')->get();
        return view('resumes.edit',compact('resume','countries','states','cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        $input = $request->except('avatar');
        if ($resume->avatar && $request->hasFile('avatar')) {
            Storage::delete('public/avatars/' . $resume->avatar);
            $resume->avatar = null;
        }

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $resume->id . '-' . $resume->name . '-' . date('Ymd') . '.' . $avatar->getClientOriginalExtension();
            $avatar->storeAs('public/avatars', $filename);
            $resume->avatar = $filename;
            $resume->save();
        }
        $resume->update($input);
        
        return redirect()->route('dashboard')->with('success', 'Resume Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
