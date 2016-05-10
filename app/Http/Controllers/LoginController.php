<?php

namespace Idearium\Http\Controllers;

use Idearium\Http\Controllers\Controller;



class MainController extends Controller {

  /*
  *  Responds to GET / . Displays login/register form if not logged in,
  *  otherwise displays 'notebook'.
  */

  public function getIndex() {
    return "Login screen";
  }

  /*
  *  Responds to POST /. For managing user log-in .
  */
  public function postIndex() {
    return "Logged in";
  }

  /*
  * Responds to GET /register. Displays register form.
  */
  public function getRegister() {
    return "Register";

  }

  /*
  *  Responds to POST /register. Handles user registration
  */
  public function postRegister() {
    return "Registered";
  }
}

?>
