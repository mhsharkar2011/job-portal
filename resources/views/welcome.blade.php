<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


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
                                                    Published Date
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Deadline
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
                                                    <td class="px-6 py-4 text-center text-gray-600">
                                                        <h4>5</h4>
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
            
    </body>
</html>
