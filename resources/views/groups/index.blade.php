<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Groups') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col gap-8 mx-auto w-1/2">

                    <button class="py-2 px-4 bg-gray-300 rounded-md"><a href="{{ route('groups.create') }}">Create new group</a></button>

                    @foreach ($groups as $group)
                        <div class="flex flex-col gap-8 md:flex-row">
                            <div class="flex-1 gap-2 flex flex-col">
                                <label for="offers" class="font-medium text-gray-700 text-md h-5">{{ $group->name }}</label>
                                <p class="text-gray-500 text-sm">{{ $group->name }}.</p>
                            </div>
                            <div class="flex flex-col gap-2 w-60">
                            <div class=" flex flex-row gap-4">
                                <a href="{{ route('groups.edit', $group->id) }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
</svg></a>
                                <a href="{{ route('groups.remove', $group->id) }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
</svg></a>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
