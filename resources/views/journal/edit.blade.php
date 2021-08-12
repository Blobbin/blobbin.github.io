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
                    <h1 class="text-3xl font-medium mx-auto">Edit journal entry</h1>
                    @if ($errors->any())
                        <div class="bg-red-500 rounded-md text-white px-4 py-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('journal.update', $entry->id) }}" class="flex flex-col gap-4">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col gap-1">
                            <label>Device</label>
                            <input type="text" name="device" value="{{ $entry->device }}" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $entry->title }}" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <label>Commands</label>
                            <input type="text" name="commands" value="{{ $entry->commands }}" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <label>Description</label>
                            <input type="text" name="description" value="{{ $entry->description }}" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <label>Notes</label>
                            <input type="text" name="notes" value="{{ $entry->notes }}" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <label>Tags</label>
                            <input type="text" name="tags" value="{{ $entry->tags }}" />
                        </div>
                        <button type="submit" class="mx-auto bg-gray-300 py-2 px-8 rounded-md">Submit changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
