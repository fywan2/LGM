<?php
namespace Admin\Controller;
use \Think\Controller;

class IndexController extends AdminController 
{
   public function index(){
   	$this->display();
   }

   public function welcome()
   {
   	$this->display();
   }

  public function yzm()
    {
        $Verify = new \Think\Verify();
        $Verify->fontSize = 16;
        $Verify->length = 4;
        $Verify->codeSet = '0123456789';
        $Verify->imageW = 100;
        $Verify->imageH = 40;
        $Verify->entry();
    }
}