<?php
  include "../../lib/database.php";
  include "../../helpers/format.php";
?>
<?php
  class product
  {
    private $db;
    private $fm;

    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function insert_product($data, $files){
      $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
      $category = mysqli_real_escape_string($this->db->link, $data['category']);
      $price = mysqli_real_escape_string($this->db->link, $data['price']);
      $quantity = mysqli_real_escape_string($this->db->link, $data['quantity']);
      $productDesc = mysqli_real_escape_string($this->db->link, $data['productDesc']);

      $permited = array('jpg', 'jpeg', 'png', 'gif');
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_temp = $_FILES['image']['tmp_name'];

      $div = explode('.', $file_name);
      $file_ext = strtolower(end($div));
      $unique_image = substr(md5(time()), 0, 10).'.' .$file_ext;
      $uploaded_image = "uploads/".$unique_image;

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
    public function show_product() {
      $query = "SELECT * FROM tbl_category order by catId desc";
      $result = $this->db->select($query);
      return $result;
    }
    public function update_product($catName,$catId) {
      $catName = $this->fm->validation($catName);
      $catName = mysqli_real_escape_string($this->db->link, $catName);

      $catId = mysqli_real_escape_string($this->db->link, $catId);

      if(empty($catName)){
        $alert = "Tên danh mục không được để trống !!!";
        return $alert;
      }else{
        $query = "UPDATE tbl_category SET catName='$catName' WHERE catId='$catId' ";
        $result = $this->db->update($query);
        if($result) {
          $alert = "Danh mục được cập nhật thành công";
          return $alert;
        } else {
          $alert = "Danh mục cập nhật không thành công";
          return $alert;
        }
      }
    }
    public function delete_product($catId) {
      $query = "DELETE FROM tbl_category WHERE catId='$catId' ";
      $result = $this->db->delete($query);
      if($result) {
        $alert = "Danh mục được xóa thành công";
        return $alert;
      } else {
         $alert = "Danh mục xóa không thành công";
        return $alert;
      }
    }
    public function getCatById($catId) {
      $query = "SELECT * FROM tbl_category WHERE catId='$catId' ";
      $result = $this->db->select($query);
      return $result;
    }
  }
?>