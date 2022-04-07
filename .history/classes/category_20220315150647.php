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
        $alert = "Tên danh mục không được để trống !!!";
        return $alert;
      }else{
        $query = "INSERT INTO tbl_category(catName) VALUE('$catName') ";
        $result = $this->db->insert($query);
        if($result) {
          $alert = "Danh mục được thêm thành công";
          return $alert;
        } else {
          $alert = "Danh mục thêm không thành công";
          return $alert;
        }
      }
    }
    public function show_category() {
      $query = "SELECT * FROM tbl_category order by catId desc";
      $result = $this->db->select($query);
      return $result;
    }
    public function getCatById($catId) {
      $query = "SELECT catName FROM tbl_category WHERE catId=($catId) ";
      $result = $this->db->select($query);
      return $result;
    }
  }
?>