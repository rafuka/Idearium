<?php

namespace Idearium\Http\Controllers;

use Idearium\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NotesController extends Controller {

  /*
  * Display user's notebook when logged in.
  */
  public function getNotebook() {
    return view('notebook');
  }

  /*
  * Handles creation of new note.
  */
  public function postNotebook(Request $request) {
    $user = $user = \Auth::user()->toArray();

    $newnote = new \Idearium\Note;
    $newnote->user_id = $user['id'];
    $newnote->text = $request->input('text');
    $newnote->save();

    \Session::flash('message', 'New note created');

    return redirect('/archive');
  }

  public function getArchive() {
    $user = \Auth::user()->toArray();

    $notes = \Idearium\Note::with('user')->where('user_id', $user['id'])->get();

    return view('archive')->with('notes', $notes);
  }

  public function getEdit($id) {
    $note = \Idearium\Note::find($id);

    return view('edit')->with('note', $note);
  }

  public function postEdit(Request $request) {
    $note = \Idearium\Note::find($request->id);

    $note->text = $request->text;
    $note->save();

    \Session::flash('message', 'Your note has been edited!');

    return redirect('/archive');
  }

  public function getDelete($id) {
    $note = \Idearium\Note::find($id);

    if ($note) {
      $note->delete();
      \Session::flash('message', 'Your note has been deleted!');
    }
    else {
      \Session::flash('message', 'Your note could not be deleted!');
    }

    return redirect('/archive');

  }
}
