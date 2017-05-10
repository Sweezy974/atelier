<?php
namespace Controllers;
use App\Config;
// use Models\Users;


class UserController extends Controller
{

  public function index()
  {
    echo "Hello User Page!";
  }

  public function register()
  {
    include_once('views/user/register/index.php');
    $workshopRegister = new Workshop();
    $workshopRegister = $workshopRegister->listWorkshop();
  }



}
