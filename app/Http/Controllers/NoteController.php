<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function showAllNotes(){
        $notes = Note::orderBy('updated_at', 'desc')->get();
        return view('welcome', ['notes' => $notes]);
    }

    public function create(){
        return view('create-page');
    }

    public function createPost(Request $request){
        $note = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'note' => 'required',
        ]);

        $createNote = Note::create($note);
        $createNote->save();

        return redirect('/');
    }

    public function showNote(Request $request){
        $note = Note::find($request->id);
        return view('show-note', ['note' => $note]);
    }

    public function edit(Request $request){
        $note = Note::find($request->id);
        return view('edit-page', ['note' => $note]);
    }

    public function editPost(Request $request){
        $updateNote = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'note' => 'required',
        ]);

        $note = Note::find($request->id);
        $note->update($updateNote);

        return redirect()->route('showNote', ['id' => $note->id]);
    }

    public function delete(Request $request){
        $note = Note::find($request->id);
        if ($note){
            $note->delete();
        }

        return redirect('/');
    }
}
