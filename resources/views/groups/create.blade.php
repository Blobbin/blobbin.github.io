<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Groups') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col gap-8">
                    <h1 class="text-3xl font-medium mx-auto">Create new group</h1>
                    @if ($errors->any())
                        <div class="bg-red-500 rounded-md text-white px-4 py-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('groups.store') }}" class="flex flex-col gap-4">
                        @csrf

                        <div class="flex flex-col gap-1">
                            <label>Name</label>
                            <input type="text" name="name" />
                        </div>
                        <button type="submit" class="mx-auto bg-gray-300 py-2 px-8 rounded-md">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
