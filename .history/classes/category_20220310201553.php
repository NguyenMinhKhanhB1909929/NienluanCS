<?php
  include "../../lib/database.php";
  include "../../helpers/format.php";
?>
<?php
  class category
  {
    private $db;
    private $fm;

    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function insert_category($catName){
      $catName = $this->fm->validation($catName);

      $catName = mysqli_real_escape_string($this->db->link, $catName);

      if(empty($catName)){
        $alert = "Category must be not empty";
        return $alert;
      }else{
        $query = "";
        $result = $this->db->insert($query);

        if($result != false){
          $value = $result->fetch_assoc();
          Session::set('adminLogin', true);
          Session::set('adminId', $value['adminId']);
          Session::set('adminUser', $value['adminUser']);
          Session::set('adminName', $value['adminName']);
          header("location:index.php");
        }else{
          $alert = "User and Pass not match";
          return $alert;
        }
      }
    }
  }
?>