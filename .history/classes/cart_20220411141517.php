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

      $query = "INSERT INTO tbl_cart(productId,quantity,sId,image,price,productName) VALUE('$productId','$quantity','$sId','$result['image']','$result['price']','$result['productName']') ";
        $result = $this->db->insert($query);
        if($result) {
          $alert = "Thêm sản phẩm mới thành công";
          return $alert;
        } else {
          $alert = "Thêm sản phẩm mới không thành công";
          return $alert;
        }
  }
}
?>