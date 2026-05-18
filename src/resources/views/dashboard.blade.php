<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left border-collapse">
                            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                                <tr>
                                    <th class="px-6 py-3 border-b dark:border-gray-600">ID</th>
                                    <th class="px-6 py-3 border-b dark:border-gray-600">Name</th>
                                    <th class="px-6 py-3 border-b dark:border-gray-600">E-Mail</th>
                                    <th class="px-6 py-3 border-b dark:border-gray-600">Verified At</th>
                                    <th class="px-6 py-3 border-b dark:border-gray-600">Role</th>
                                    <th class="px-6 py-3 border-b dark:border-gray-600">Created At</th>
                                    <th class="px-6 py-3 border-b dark:border-gray-600">Updated At</th>
                                    <th class="px-6 py-3 border-b dark:border-gray-600">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700 text-center">
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium">{{ $user->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                            {{ $user->email_verified_at ? $user->email_verified_at->format('d/m/Y') : 'Not verified' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                                {{ strtoupper($user->role) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">{{ $user->created_at->diffForHumans() }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">{{ $user->updated_at->format('d/m/Y') }}</td>
                                        <td class="text-red-150">
                                            <form action="" method="post"><button type="submit" onclick="return confirm('Are you sure you want to delete this user ?')">Delete</button></form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>