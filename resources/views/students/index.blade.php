<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-4/5 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border-b border-gray-200 rounded-lg shadow-lg">
                <table class="w-full p-2">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-300 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($students as $student)
                        <tr class="text-gray-700 text-sm">
                            <td class="px-4 py-3 border">{{ $student->name }}</td>
                            <td class="px-4 py-3 border">{{ $student->email }}</td>
                                </div>
                            </td>
                            <td class="px-4 py-3 border">
                                <div class=" flex flex-row gap-4">
                                <a href="{{ route('students.show', $student->id) }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
</svg></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-8 py-2 mt-4 hidden">
                
            </div>
        </div>
    </div>
</x-app-layout>
