<?php include "../nienluan/include/header.php"; ?>


      <div class="app__container">
        <div class="grid">
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <span class="">Trang chủ</span>
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="isHere">Giỏ hàng</span>
          </div>
          <h1 class="cart-heading">Giỏ hàng</h1>
          <div class="table__item">
            <div class="table__item-title">
              <div class="table__item-title-text" style="width: 17%">
                Ảnh sản phầm
              </div>
              <div class="table__item-title-text" style="width: 33%">
                Tên sản phẩm
              </div>
              <div class="table__item-title-text" style="width: 15%">
                Đơn giá
              </div>
              <div class="table__item-title-text" style="width: 14%">
                Số lượng
              </div>
              <div class="table__item-title-text" style="width: 15%">
                Thành tiền
              </div>
              <div class="table__item-title-text" style="width: 6%">Xóa</div>
            </div>
            <?php
              $cartList = $ct->getCart();
              $subTotal = 0;
              if($cartList) {
                while($result = $cartList->fetch_assoc()) {
            ?>
            <div class="table__item-content">
              <div class="table__item-title-text" style="width: 17%">
                <a
                  href="./ItemDes.php"
                  class="table__item-content-img"
                  style="
                    background-image: url(./Admin/production/uploads/<?php echo $result['image']; ?>);
                  "
                ></a>
              </div>
              <div class="table__item-content-text" style="width: 33%">
                <a href="./ItemDes.php"
                  ><?php echo $result['productName']; ?></a
                >
              </div>
              <div class="table__item-content-text" style="width: 15%">
                <span value="<?php echo $result['price']; ?>" class="table__item-content-price1"
                  ><?php echo $result['price']; ?></span
                >
              </div>
              <div class="table__item-content-text" style="width: 14%">
                <div class="item__description-quantity-input">
                  <div class="item__description-quantity-prev">-</div>
                  <input
                    type="text"
                    class="item__description-quantity-number"
                    value="<?php echo $result['quantity']; ?>"
                  />
                  <div class="item__description-quantity-next">+</div>
                </div>
              </div>
              <div class="table__item-content-text" style="width: 15%">
                <span value="<?php
                $total = $result['price'] * $result['quantity'];
                echo $total;
                ?>" class="table__item-content-price"
                  ><?php
                echo $total;
              ?></span
                >
              </div>
              <div class="table__item-content-text" style="width: 6%" >
                <i class="deleted-icon fas fa-times"></i>
              </div>
            </div>
            <?php
              $subTotal += $total;
                }
              };
            ?>


            <div class="table__item-sum-price">
              <div class="table__item-sum-price-text">Tổng tiền:</div>
              <span class="table__item-sum-price-number"><?php
                echo $subTotal;
              ?>
            </span>
            </div>
          </div>
          <div class="btn-continue-ordered">
            <a href="./FormUser.php" class="btn-continue">Tiếp tục mua hàng</a>
            <a href="./FormPay.php" class="btn-ordered">
              Thực hiện thanh toán
            </a>
          </div>
        </div>
      </div>

 <?php include "../nienluan/include/footer.php"; ?>
