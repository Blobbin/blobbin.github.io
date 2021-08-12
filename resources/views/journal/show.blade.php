<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Journal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col gap-2">
                    <div class="flex flex-col gap-1">
                        <p class="font-medium text-md">Device</p>
                        <p class="text-sm text-gray-500">{{ $entry->device }}</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-medium text-md">Title</p>
                        <p class="text-sm text-gray-500">{{ $entry->title }}</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-medium text-md">Commands</p>
                        <p class="text-sm text-gray-500">{{ $entry->commands }}</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-medium text-md">Description</p>
                        <p class="text-sm text-gray-500">{{ $entry->description }}</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-medium text-md">Notes</p>
                        <p class="text-sm text-gray-500">{{ $entry->notes }}</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-medium text-md">Tags</p>
                        <p class="text-sm text-gray-500">{{ $entry->tags }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
