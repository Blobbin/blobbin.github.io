<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('q')) {
            $q = $request->input('q');
            $entries = Entry::where('user_id', Auth::user()->id)
                ->where(
                    function($query) use ($q) {
                        return $query->where('device', 'LIKE', '%'.$q.'%')
                            ->orWhere('title','LIKE','%'.$q.'%')
                            ->orWhere('commands','LIKE','%'.$q.'%')
                            ->orWhere('description','LIKE','%'.$q.'%')
                            ->orWhere('notes','LIKE','%'.$q.'%')
                            ->orWhere('tags','LIKE','%'.$q.'%');
                    })
                ->paginate(20);
        } else {
            $entries = Entry::where('user_id', Auth::user()->id)->paginate(20);
        }

        return view('journal.index', [
            'query' => $q ?? '',
            'entries' => $entries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'device' => 'required|max:100',
            'title' => 'required|max:50',
            'commands' => 'required',
            'description' => 'required',
            'notes' => '',
            'tags' => '',
        ]);      
        $entry = new Entry;
        $entry->device = $request->input('device');
        $entry->title = $request->input('title');
        $entry->commands = $request->input('commands');
        $entry->description = $request->input('description');
        $entry->notes = $request->input('notes');
        $entry->tags = $request->input('tags');
        $entry->user_id = Auth::user()->id;
        $entry->save();
        return redirect()->route('journal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('journal.show', [
            'entry' => Entry::where('user_id', Auth::user()->id)->findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('journal.edit', [
            'entry' => Entry::where('user_id', Auth::user()->id)->findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'device' => 'required|max:100',
            'title' => 'required|max:50',
            'commands' => 'required',
            'description' => 'required',
            'notes' => '',
            'tags' => '',
        ]);   
         
        $entry = Entry::where('user_id', Auth::user()->id)->findOrFail($id);
        $entry->device = $request->input('device');
        $entry->title = $request->input('title');
        $entry->commands = $request->input('commands');
        $entry->description = $request->input('description');
        $entry->notes = $request->input('notes');
        $entry->tags = $request->input('tags');
        $entry->save();
        return redirect()->route('journal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        return view('journal.remove', [
            'entry' => Entry::where('user_id', Auth::user()->id)->findOrFail($id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = Entry::where('user_id', Auth::user()->id)->findOrFail($id);
        $entry->delete();
        return redirect()->route('journal.index');
    }
}
