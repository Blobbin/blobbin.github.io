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
                    <h1 class="text-3xl font-medium mx-auto">Viewing {{ $student->name }}</h1>
                    <div class="flex flex-col gap-4">
                        <div class="px-4 py-3">
                            <h1 class="font-medium text-xl">Name<h1>
                            <p>{{ $student->name }}</p>
                        </div>
                        <div class="px-4 py-3">
                            <h1 class="font-medium text-xl">Email<h1>
                            <p>{{ $student->email }}</p>
                        </div>
                        @if (Auth::user()->role == 'admin')
                        <form method="POST" action="{{ route('students.update_role', $student->id) }}" class="flex flex-col gap-4">
                         @csrf

                        <div class="flex flex-col gap-1">
                                <label>Role</label>
                                <select name="role" id="role-select">
                                    <option value="admin">Admin</option>
                                    <option value="staff">Staff</option>
                                    <option value="student">Student</option>
                                </select>
                                <button type="submit" class="mx-auto bg-gray-300 py-2 px-8 rounded-md">Modify role</button>
                            </div>
                        </form>
                        @else
                        <div class="px-4 py-3">
                            <h1 class="font-medium text-xl">Role<h1>
                            <p>{{ $student->role }}</p>
                        </div>
                        @endif
                        <div class="px-4 py-3">
                            <h1 class="font-medium text-xl">Groups</h1>
                            @if (is_array($student->groups) || is_object($student->groups))
                                @foreach ($student->groups as $group)
                                    <div class="">
                                        <span>{{ $group->name }}</span>
                                    </div>
                                @endforeach
                            @else
                                <p>This student is not assigned to any groups</p>
                            @endif
                        </div>

                        <div class="px-4 py-3">
                            <h1 class="font-medium text-xl">Add to group</h1>
                            <form method="POST" action="{{ route('students.update', $student->id) }}" class="flex flex-col gap-4">
                                @csrf
                                @method('PUT')

                                <div class="flex flex-col gap-1">
                                    <select name="group" id="group-select">
                                        @foreach ($groups as $group)
                                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="mx-auto bg-gray-300 py-2 px-8 rounded-md">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
