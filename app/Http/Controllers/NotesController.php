<?php

namespace Idearium\Http\Controllers;

use Idearium\Http\Controllers\Controller;



class NotesController extends Controller {

  /*
  * Display user's notebook when logged in.
  */
  public function getNotebook() {
    return "Home Notebook Dispñlay";
  }

  /*
  * Handles creation of new note.
  */
  public function postNotebook() {
    return "Note created";
  }

  public function getArchive() {
    return "Display all notes";
  }




}
