<?php
namespace Controllers;
use App\Config;


class IndexController extends Controller
{
    public function index()
    {
        include_once 'views/index/index.php';
        // echo $this->twig->render('index.html'
        // ,
        //   [
        //     "userList" => $userList,
        //     "quantity" => count($userList)
        //   ]
        // );
    }
}
