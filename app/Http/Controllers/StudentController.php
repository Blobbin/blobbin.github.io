<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index(Request $request)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
        }

        $users = User::all();

        return view('students.index', [
            'students' => $users,
        ]);
    }

    public function show($id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
        }

        $user = User::findOrFail($id);
        $groups = Group::all();

        return view('students.show', [
            'student' => $user,
            'groups' => $groups,
        ]);
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
        }

        $user = User::findOrFail($id);
        $group = Group::findOrFail($request->input('group'));

        DB::table('group_user')->insert([
            'user_id' => $user->id,
            'group_id' => $group->id,
        ]);

        $groups = Group::all();
        return view('students.show', [
            'student' => $user,
            'groups' => $groups,
        ]);
    }

    public function update_role(Request $request, $id)
    {
        if (Auth::user()->role != 'admin') {
            abort(403, "Unauthorized");
        }

        $user = User::findOrFail($id);
        $user->role = $request->input('role');
        $user->save();

        $groups = Group::all();
        return view('students.show', [
            'student' => $user,
            'groups' => $groups,
        ]);
    }
}
