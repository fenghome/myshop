<?php
namespace app\store\controller;

use think\Controller;

class Passport extends Controller{
  public function login(){
    return $this->fetch('passport/login');
  }
}