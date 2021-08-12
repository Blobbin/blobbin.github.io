<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupsController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        $groups = Group::all();

        return view('groups.index', [
            'groups' => $groups,
        ]);
    }

    public function create()
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        return view('groups.create');
    }

    public function store(Request $request)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }

          $request->validate([
            'name' => 'required|max:100',
        ]);    
        $group = new Group();
        $group->name = $request->input('name');
        $group->save();
        return redirect()->route('groups.index');
    }

    public function show($id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        return view('groups.show', [
            'group' => Group::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        return view('groups.edit', [
            'group' => Group::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }

          $request->validate([
            'name' => 'required|max:100',
        ]);    
        
        $group = Group::findOrFail($id);
        $group->name = $request->input('name');
        $group->save();
        return redirect()->route('groups.index');
    }

    public function remove($id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        return view('groups.remove', [
            'group' => Group::findOrFail($id)
        ]);
    }

    public function destroy($id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        $group = Group::findOrFail($id);
        $group->delete();
        return redirect()->route('groups.index');
    }
}
