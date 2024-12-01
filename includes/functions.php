<?php
error_reporting(0);
session_start();

    //functions login();
    function login(){
      session_start();
      $login = false;
      if(isset($_SESSION['name'])){
        $login = true;
      }
      return $login;
    }
