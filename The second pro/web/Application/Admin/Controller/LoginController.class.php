<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends AdminController
{
   
   public function login()
   {
   	$this->display();
   }
   public function dologin()
   {
     $name = $_POST['admin'];
     $pass = $_POST['pass'];
     $yzm  = $_POST['yzm'];

     $this->display('Index/index');
   }

}