<?php

  session_start();
  unset($_SESSION['username']);
  $_SESSION['login']=false;
  
  header( "location:login.php")
?>