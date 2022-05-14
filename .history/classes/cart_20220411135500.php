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
    public function addCart($cartId,$quantity){
      $quantity = mysqli_real_escape_string($this->db->link, $quantity);
      $cartId = mysqli_real_escape_string($this->db->link, $cartId);
      $sId = session_id();
  }
}
?>