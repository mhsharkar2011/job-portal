<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left border-t">
                            <thead
                                class="text-lg text-gray-800  bg-white">
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Company Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Job Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-700">
                                        1
                                    </th>
                                    <td class="px-6 py-4">
                                        Kore Search
                                    </td>
                                    <td class="px-6 py-4">
                                        Laravel PHP Developer
                                    </td>
                                    <td class="px-6 py-4">
                                        <?php echo date("Y-M-d");?>
                                    </td>
                                    <td class="px-6 py-4 text-center text-red-600">
                                        <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>