<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left border-t">
                            <thead class="text-lg text-gray-800  bg-white">
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
                            <?php $count = 1 ?>
                           
                            @foreach ($jobs as $job)
                                <tbody>
                                    <tr class="bg-white border-b dark:border-gray-700">
                                        <td class="px-6 py-4">
                                            {{ $count++ }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job->company_name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job->job_title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job->created_at }}
                                        </td>
                                        <td class="px-6 py-4 text-center text-red-600">
                                            <form method="POST" action="{{ route('jobs.destroy',$job->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><i class="fa-regular fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>

                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
