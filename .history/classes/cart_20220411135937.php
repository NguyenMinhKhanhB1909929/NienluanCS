<?php
$filepath = realpath(dirname(__FILE__));
  include_once ($filepath."../../lib/database.php");
  include_once ($filepath."../../helpers/format.php");
?>
<?php
  class cart
  {
    private $db;
    private $fm;

    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function addCart($productId,$quantity){
      $quantity = $this->fm->validation($quantity);
      $quantity = mysqli_real_escape_string($this->db->link, $quantity);
      $productId = mysqli_real_escape_string($this->db->link, $productId);
      $sId = session_id();

      $query = "SELECT * FROM tbl_product WHERE productId = '$productId'";
      $result = $this->db->select($query)->fetch_assoc();
      print_r $result;
  }
}
?>