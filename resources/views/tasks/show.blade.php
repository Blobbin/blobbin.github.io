<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col gap-8">
                    <h1 class="text-3xl font-medium mx-auto">Task {{ $task->title }}</h1>

                    <div class="flex flex-col gap-4">
                        <div class="px-4 py-3">
                            <h1 class="font-medium text-xl">Description<h1>
                            <p>{{ $task->description }}</p>
                        </div>
                        <div class="px-4 py-3">
                            <h1 class="font-medium text-xl">Due date<h1>
                            <p>{{ $task->due_date }}</p>
                        </div>

                        <div class="px-4 py-3">
                            <h1 class="font-medium text-xl">Assigned students</h1>
                            <table class="w-full p-2 mt-2">
                            <thead>
                                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-300 uppercase border-b border-gray-600">
                                    <th class="px-4 py-3">Name</th>
                                    <th class="px-4 py-3">Email</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($task->assigns as $assigned)
                                <tr class="text-gray-700 text-sm">
                                    <td class="px-4 py-3 border">{{ $assigned->user->name }}</td>
                                    <td class="px-4 py-3 border">{{ $assigned->user->email }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
