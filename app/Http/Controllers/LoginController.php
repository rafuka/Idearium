<?php

namespace Idearium\Http\Controllers;

use Idearium\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller {

  /*
  *  Responds to GET / . Displays login form if not logged in,
  *  otherwise displays 'notebook'.
  */

  public function getIndex() {
    return view('login');
  }

  /*
  *  Responds to POST /. For managing user log-in.
  */
  public function postIndex(Request $request) {

    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:7'
    ]);
    return "Logged In";
  }

  /*
  * Responds to GET /register. Displays register form.
  */
  public function getRegister() {
    return view('register');

  }

  /*
  *  Responds to POST /register. Handles user registration.
  */
  public function postRegister(Request $request) {
    return "Registered";
  }
}

?>
