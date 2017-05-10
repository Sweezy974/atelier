<?php
namespace Controllers;
use App\Config;
// use Models\Users;


class FaqController extends Controller
{

  public function index()
  {
    include_once('views/faq/index.php');
  }
}
