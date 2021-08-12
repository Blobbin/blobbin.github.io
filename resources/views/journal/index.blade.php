<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Journal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-4/5 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-2 py-2 mb-4 flex flex-row">
                <form method="GET" action="{{ route('journal.index') }}">
                    <input type="text" class="rounded-md max-w-lg w-72" placeholder="Search..." name="q" value="{{ $query }}" />
                    <button type="submit" class="py-2 px-4 bg-gray-300 rounded-md">Search</button>
                </form>
                <div class="flex-grow"></div>
                <button class="py-2 px-4 bg-gray-300 rounded-md"><a href="{{ route('journal.create') }}">Create new entry</a></button>
            </div>
            <div class="bg-white border-b border-gray-200 rounded-lg shadow-lg">
                <table class="w-full p-2">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-300 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Device</th>
                            <th class="px-4 py-3">Title</th>
                            <th class="px-4 py-3">Commands</th>
                            <th class="px-4 py-3">Description</th>
                            <th class="px-4 py-3">Notes</th>
                            <th class="px-4 py-3">Tags</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($entries as $entry)
                        <tr class="text-gray-700 text-sm">
                            <td class="px-4 py-3 border">{{ $entry->device }}</td>
                            <td class="px-4 py-3 border">{{ $entry->title }}</td>
                            <td class="px-4 py-3 border">{{ $entry->commands }}</td>
                            <td class="px-4 py-3 border">{{ $entry->description }}</td>
                            <td class="px-4 py-3 border">{{ $entry->notes }}</td>
                            <td class="px-4 py-3 border">{{ $entry->tags }}</td>
                            <td class="px-4 py-3 border">
                                <div class=" flex flex-row gap-4">
                                <a href="{{ route('journal.edit', $entry->id) }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
</svg></a>
                                <a href="{{ route('journal.remove', $entry->id) }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
</svg></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-8 py-2 mt-4">
                {{ $entries->appends($_GET)->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
