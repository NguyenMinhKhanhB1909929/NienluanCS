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
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function login_admin($adminUser, $adminPass){
      $adminUser = $this->fm->validation($adminUser);
      $adminPass = $this->fm->validation($adminPass);

      $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
    }
  }
?>