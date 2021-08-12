<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    /**
     * Show announcements.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('announcements.index', [
            'announcements' => Announcement::paginate(10)
        ]);
    }

    public function mark()
    {
    }


    public function create()
    {
        return view('announcements.create');
    }


    public function store(Request $request)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
          $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);          
        $announcement = new Announcement();
        $announcement->title = $request->input('title');
        $announcement->body = $request->input('body');
        $announcement->save();
        return redirect()->route('announcements.index');
    }


    public function show($id)
    {
        return view('announcements.show', [
            'announcement' => Announcement::findOrFail($id)
        ]);
    }


    public function edit($id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        return view('announcements.edit', [
            'announcement' => Announcement::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }

          $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);  
        
        $announcement = Announcement::findOrFail($id);
        $announcement->title = $request->input('title');
        $announcement->body = $request->input('body');
        $announcement->save();
        return redirect()->route('announcements.index');
    }

    public function remove($id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        return view('announcements.remove', [
            'announcement' => Announcement::findOrFail($id)
        ]);
    }

    public function destroy($id)
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();
        return redirect()->route('announcements.index');
    }
}
