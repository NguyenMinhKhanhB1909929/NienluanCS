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
      $image = $result['image'];
      $price = $result['price'];
      $productName = $result['productName'];
      $checkCart = "SELECT * FROM tbl_cart WHERE productId = '$productId' AND sId = '$sId'";
      if($checkCart) {
        // header('Location:orderItem.php');
        echo 123;
      }
      else {
        $query_insert = "INSERT INTO tbl_cart(productId,quantity,sId,image,price,productName) VALUE('$productId','$quantity','$sId', '$image' ,'$price','$productName')";
          $insertCart = $this->db->insert($query_insert);
      }
        if($insertCart) {
          header('Location:orderItem.php');
        }
  }
  public function getCart() {
    $sId = session_id();
    $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
    $result = $this->db->select($query);
    return $result;
  }
}
?>