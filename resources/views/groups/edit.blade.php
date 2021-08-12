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
                    <h1 class="text-3xl font-medium mx-auto">Edit group</h1>
                    @if ($errors->any())
                        <div class="bg-red-500 rounded-md text-white px-4 py-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('groups.update', $group->id) }}" class="flex flex-col gap-4">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col gap-1">
                            <label>Title</label>
                            <input type="text" name="name" value="{{ $group->name }}"/>
                        </div>
                        <button type="submit" class="mx-auto bg-gray-300 py-2 px-8 rounded-md">Save</button>
                    </form>

                    @if (is_array($group->users))
                    <table class="w-full p-2">
                        <thead>
                            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-300 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Email</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($group->users as $user)
                            <tr class="text-gray-700 text-sm">
                                <td class="px-4 py-3 border">{{ $user->name }}</td>
                                <td class="px-4 py-3 border">{{ $user->email }}</td>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
