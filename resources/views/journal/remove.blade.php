<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Journal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col gap-8">
                    <h1>Are you sure you want to remove <span class="font-bold">{{ $entry->title }}</span></h1>
                    <form method="POST" action="{{ route('journal.destroy', $entry->id) }}">
                        @csrf
                        @method('DELETE')
                        <button action="submit" class="py-2 px-8 bg-gray-300 rounded-md mx-auto">I'm sure, remove this entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
