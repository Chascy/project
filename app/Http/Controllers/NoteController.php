<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function showAllNotes(){
        $user = Auth::user();
        $userNotes = Note::where('user_id', $user->id)->get();

        return view('welcome', ['notes' => $userNotes, 'user' => $user]);
    }

    public function create(){
        return view('create-page');
    }

    public function createPost(Request $request){
        $note = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'context' => 'required',
        ]);

        $note['user_id'] = Auth::user()->id;
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
            'context' => 'required',
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
