<?php
  include "/xampp/htdocs/NienLuan/lib/session.php";
  Session::checkLogin();
  include "/xampp/htdocs/NienLuan/lib/database.php";
  include "/xampp/htdocs/NienLuan/helpers/format.php";
?>
<?php
  class adminlogin
  {
    private $db;
    private $fm;

    public function __construct()
    {

    }
    public function login_admin(){

    }
  }
?>