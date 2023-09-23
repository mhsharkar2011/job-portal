<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white text-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 ">
                    <div>
                        <h3 class="text-3xl font-bold dark: mb-6">Post a job</h3>
                    </div>
                    <form action="{{ route('jobs.postJob') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="company_name" class="block mb-2 text-sm font-medium  dark:">Company Name <span class="text-red-500">*</span></label>
                            <input type="text" name="company_name" id="company_name" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Company Name" required>
                        </div>
                        <div class="mb-6">
                            <label for="job_title" class="block mb-2 text-sm font-medium  dark:">Job Title <span class="text-red-500">*</span></label>
                            <input type="text" name="job_title" id="job_title" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Job Title" required>
                        </div>
                        <div class="mb-6">    
                            <label for="job_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700">Job Description</label>
                            <textarea id="job_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 " placeholder="Job Description"></textarea>

                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="requirement" class="block mb-2 text-sm font-medium  dark:">Requirement <span class="text-red-500">*</span></label>
                                <input type="text" name="requirement" id="requirement" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Requirement" required>
                            </div>
                            <div>
                                <label for="location" class="block mb-2 text-sm font-medium  dark:">Location <span class="text-red-500">*</span></label>
                                <input type="text" name="location" id="location" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Location" required>
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-3">
                            <div>
                                <label for="experience_minimum" class="block mb-2 text-sm font-medium  dark:">Experience <span class="text-red-500">*</span></label>
                                <input type="number" name="experience_minimum" id="experience_minimum" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Minimum" required>
                            </div>
                            <div>
                                <label for="experience_maximum" class="block mb-2 text-sm font-medium  dark:"><span class="text-white">*</span></label>
                                <input type="number" name="experience_maximum" id="experience_maximum" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Maximum" required>
                            </div>
                            <div>
                                <label for="experience_month" class="block mb-2 text-sm font-medium  dark:"><span class="text-white">*</span></label>
                                <select id="experience_month" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:">
                                    <option selected>Months</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="Appril">Appril</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                  </select>
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="role" class="block mb-2 text-sm font-medium  dark:">Role<span class="text-red-500">*</span></label>
                                <input type="text" name="role" id="role" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Role" required>
                            </div>
                            <div>
                                <label for="Industry_type" class="block mb-2 text-sm font-medium  dark:">Industry Type <span class="text-red-500">*</span></label>
                                <input type="text" name="Industry_type" id="Industry_type" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Industry Type" required>
                            </div>
                        </div>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="employment_type" class="block mb-2 text-sm font-medium  dark:">Employment Type <span class="text-red-500">*</span></label>
                                <input type="text" name="employment_type" id="employment_type" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Employment Type" required>
                            </div>
                            <div>
                                <label for="logo" class="block mb-2 text-sm font-medium  dark:text-white" >Upload file</label>
                                <input type="file" name="logo" id="logo" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" >
                            </div>
                        </div>

                        <div class="grid gap-6 mb-6 md:grid-cols-3">
                            <div>
                                <label for="salary_minimum" class="block mb-2 text-sm font-medium  dark:">Salary</label> 
                                <input type="number" name="salary_minimum" id="salary_minimum" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Minimum" required>
                            </div>
                            <div>
                                <label for="salary_maximum" class="block mb-2 text-sm font-medium  dark:">
                                    <span class="text-red-500">*</span></label> 
                                <input type="number" name="salary_maximum" id="salary_maximum" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Maximum" required>
                            </div>
                            <div>
                                <label for="salary_currency" class="block mb-2 text-sm font-medium  dark:">
                                    <span class="text-red-500">*</span>    
                                </label> 
                                <select id="salary_currency" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:">
                                    <option selected>Currency</option>
                                    <option value="USD">USD</option>
                                    <option value="BDT">BDT</option>
                                    <option value="EURO">EURO</option>
                                    <option value="ROPE">ROPE</option>
                                  </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="key_skills" class="block mb-2 text-sm font-medium  dark:">Key Skill<span class="text-red-500">*</span></label>
                            <input type="text" name="key_skills" id="key_skills" class="bg-white-500 border border-gray-300  text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:" placeholder="Key Skills" required>
                        </div>
                        <button type="submit" class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 float-right">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
