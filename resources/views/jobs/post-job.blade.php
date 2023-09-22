<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h3 class="text-3xl font-bold dark:text-gray-500 mb-6">Post a job</h3>
                    </div>
                    <form>
                        <div class="mb-6">
                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Company Name <span class="text-red-500">*</span></label>
                            <input type="text" name="address" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Company Name" required>
                        </div>
                        <div class="mb-6">
                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Job Title <span class="text-red-500">*</span></label>
                            <input type="text" name="address" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Job Title" required>
                        </div>
                        <div class="mb-6">
                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Job Description<span class="text-red-500">*</span></label>
                            <input type="textarea" name="address" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Job Description" required>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Requirement <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Requirement" required>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Location <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Location" required>
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-3">
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Experience <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Minimum" required>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"><span class="text-white">*</span></label>
                                <input type="text" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Maximum" required>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"><span class="text-white">*</span></label>
                                <select id="months" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500">
                                    <option selected>Months</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                  </select>
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Role<span class="text-red-500">*</span></label>
                                <input type="text" name="address" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Role" required>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Industry Type <span class="text-red-500">*</span></label>
                                <input type="text" name="address" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Industry Type" required>
                            </div>
                        </div>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Employment Type <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Employment Type" required>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                                <input class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" name="logo" id="file_input" type="file">
                            </div>
                        </div>

                        <div class="grid gap-6 mb-6 md:grid-cols-3">
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Salary</label> 
                                <input type="text" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Minimum" required>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                    <span class="text-red-500">*</span></label> 
                                <input type="text" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Maximum" required>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                    <span class="text-red-500">*</span>    
                                </label> 
                                <select id="months" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500">
                                    <option selected>Currency</option>
                                    <option value="US">USD</option>
                                    <option value="CA">BDT</option>
                                    <option value="FR">Euro</option>
                                    <option value="DE">Rope</option>
                                  </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Key Skill<span class="text-red-500">*</span></label>
                            <input type="text" name="address" id="first_name" class="bg-white-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:placeholder-gray-400 dark:text-gray-500" placeholder="Key Skills" required>
                        </div>
                        <button type="submit" class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 float-right">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
