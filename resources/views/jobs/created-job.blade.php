<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl p-6 text-gray-900">
                    @foreach ($jobs as $job)
                        <div class=" transition-all duration-300 hover:rotate-1 grid mb-8 border border-gray-200 rounded-lg shadow-sm">
                            <figure class="flex flex-col p-8 bg-white border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-50">
                                <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                                    <div class="col-span-2">
                                        <div class="mb-4"><button class="bg-green-500 px-2 rounded text-white font-bold">Approved</button></div>
                                        <div>
                                            <h2>{{ $job->job_title }}</h5>
                                            <h6>{{ $job->job_description }}</h6>
                                        </div>
                                        <div class="mt-4 space-x-1">
                                            <span class="dark:bg-gray-200 px-3 py-1 rounded-sm"><i class="fa-regular fa-clock"></i> 5 Months ago</span> 
                                            <span class="dark:bg-gray-200 p-1 rounded-sm">Job Applicants 0</span>
                                        </div>
                                        <div class="mt-2">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" class="sr-only peer" checked>
                                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-600 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[1px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600">Job Status</span>
                                              </label>
                                              
                                        </div>
                                    </div>
                                    <div class="justify-left flex-col-6">
                                        <div>
                                        <x-logo :user="$job->logo" class="rounded h-24 float-right" alt="Avatar"/>  
                                        </div>
                                        <div class="text-right mt-24">
                                            <button class="text-orange-400 p-2 transition-all duration-300 hover:scale-110 hover:text-red-600"><i class="fa-regular fa-eye"></i></button>
                                            <button class="text-orange-400 p-2 transition-all duration-300 hover:scale-110 hover:text-red-600"><i class="fa-solid fa-pencil"></i></button>
                                            <button class="text-orange-400 p-2 transition-all duration-300 hover:scale-110 hover:text-red-600"><i class="fa-regular fa-trash-can"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
