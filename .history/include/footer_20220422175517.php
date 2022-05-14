<footer class="footer">
<?php
  echo $_GET['email'];
?>
        <div class="grid">
          <div class="grid__row">
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Chăm sóc khách hàng</h3>
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="" class="footer__item-link">Trung tâm trợ giúp</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">NMK-Shop Mall</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Hướng dẫn mua hàng</a>
                </li>
              </ul>
            </div>
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Về NMK-Shop</h3>
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="" class="footer__item-link">Giới thiệu</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Tuyển dụng</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Điều khoản</a>
                </li>
              </ul>
            </div>
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Theo dõi tôi trên</h3>
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="" class="footer__item-link">
                    <i class="footer__iten-icon fab fa-facebook"></i>
                    Facebook
                  </a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">
                    <i class="footer__iten-icon fab fa-instagram"></i>
                    Instagram
                  </a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">
                    <i class="footer__iten-icon fab fa-linkedin"></i>
                    Linkedln
                  </a>
                </li>
              </ul>
            </div>
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Danh mục</h3>
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="" class="footer__item-link">Máy tính bàn</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Laptop</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Phụ kiện</a>
                </li>
              </ul>
            </div>
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
              <div class="footer__download">
                <img
                  src="./assets/img/qr_code.png"
                  alt="Download QR"
                  class="footer__download-qr"
                />
                <div class="footer__download-apps">
                  <a href="" class="footer__download-app-link">
                    <img
                      src="./assets/img/googleplay.png"
                      alt="GooglePlay"
                      class="footer__download-app-img"
                    />
                  </a>
                  <a href="" class="footer__download-app-link">
                    <img
                      src="./assets/img/appstore.png"
                      alt="AppStore"
                      class="footer__download-app-img"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="grid">
            <p class="footer-text">
              &copy; 2021 - Bản quyền thuộc về NGUYEN MINH KHANH - B1909929
            </p>
          </div>
        </div>
      </footer>
    </div>

    <!-- Modal Layout -->
    <div class="modal js-modal">
      <div class="modal__overlay"></div>
      <div class="modal__body">
        <!-- Register form -->
        <form action="" id="form-reg">
          <div class="auth-form js-auth-form-register">
            <div class="auth-form__logo">
              <img
                src="./assets/img/LOGO.png"
                class="auth-form__logo-img"
                alt=""
              />
            </div>
            <div class="auth-form__container">
              <div class="auth-form__header">
                <h3 class="auth-form__heading">Đăng ký</h3>
                <span class="auth-form__switch-btn js-change-login"
                  >Đăng nhập</span
                >
              </div>

              <form action="" method="post">
                <div class="auth-form__form">
                  <div class="auth-form__group">
                    <div class="auth-form__group-input">
                      <label for="">Email:</label>
                      <input
                        type="text"
                        id="emailReg"
                        class="auth-form__input"
                        placeholder="Nhập Email của bạn"
                        name="email"
                      />
                    </div>
                    <span class="form-message"></span>
                  </div>
                  <div class="auth-form__group">
                    <div class="auth-form__group-input">
                      <label for="">Mật khẩu:</label>
                      <input
                        type="password"
                        id="passwordReg"
                        class="auth-form__input"
                        name="pass"
                        placeholder="Nhập Mật khẩu của bạn"
                      />
                    </div>
                    <span class="form-message"></span>
                  </div>
                  <div class="auth-form__group">
                    <div class="auth-form__group-input">
                      <label for="">Nhập lại mật khẩu:</label>
                      <input
                        type="password"
                        id="passwordRegConf"
                        name="rePass"
                        class="auth-form__input"
                        placeholder="Nhập lại mật khẩu"
                      />
                    </div>
                    <span class="form-message"></span>
                  </div>
                </div>
              </form>
              <div class="auth-form__aside">
                <p class="auth-form__policy-text">
                  Bằng việc đăng ký, bạn đã đồng ý với NMK-Shop về
                  <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>
                  &
                  <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                </p>
              </div>
              <div class="auth-form__controls">
                <button class="btn btn-normal auth-form__controls-back js-back">
                  TRỞ LẠI
                </button>
                <button name="register" class="btn btn-primary">ĐĂNG KÝ</button>
              </div>
            </div>
            <div class="auth-form__socials">
              <a
                href=""
                class="
                  auth-form__socials--facebook
                  btn btn-size-S btn--switch-icon
                "
              >
                <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-title">
                  Kết nối với Facebook
                </span>
              </a>
              <a
                href=""
                class="
                  auth-form__socials--google
                  btn btn-size-S btn--switch-icon
                "
              >
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png"
                  alt=""
                  class="auth-form__icon-google"
                />
                <span class="auth-form__socials-title">
                  Kết nối với Google
                </span>
              </a>
            </div>
          </div>
        </form>

        <!-- Login form -->
        <form action="" id="form-login" method="post">
          <div class="auth-form js-auth-form-login">
            <div class="auth-form__logo">
              <img
                src="./assets/img/LOGO.png"
                class="auth-form__logo-img"
                alt=""
              />
            </div>
            <div class="auth-form__container">
              <div class="auth-form__header">
                <h3 class="auth-form__heading">Đăng nhập</h3>
                <span class="auth-form__switch-btn js-change-register"
                  >Đăng ký</span
                >
              </div>
              <div class="auth-form__form">
                <div class="auth-form__group">
                  <div class="auth-form__group-input">
                    <label for="">Email:</label>
                    <input
                      type="text"
                      id="emailLogin"
                      class="auth-form__input"
                      name="email"
                      placeholder="Nhập Email của bạn"
                    />
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="auth-form__group">
                  <div class="auth-form__group-input">
                    <label for="">Mật khẩu:</label>
                    <input
                      type="password"
                      id="passwordLogin"
                      class="auth-form__input"
                      name="password"
                      placeholder="Nhập Mật khẩu của bạn"
                    />
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="auth-form__aside">
                  <div class="auth-form__help">
                    <a
                      href=""
                      class="auth-form__help-link auth-form__help-forgot"
                      >Quên mật khẩu</a
                    >
                    <span class="auth-form__help-separate"></span>
                    <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                  </div>
                </div>
                <div class="auth-form__controls">
                  <button
                    class="btn btn-normal auth-form__controls-back js-back"
                  >
                    TRỞ LẠI
                  </button>
                  <button href="./FormUser.php" class="btn btn-primary btn-login"
                    >ĐĂNG NHẬP</button
                  >
                </div>
              </div>
            </div>
            <div class="auth-form__socials">
              <a
                href=""
                class="
                  auth-form__socials--facebook
                  btn btn-size-S btn--switch-icon
                "
              >
                <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-title">
                  Kết nối với Facebook
                </span>
              </a>
              <a
                href=""
                class="
                  auth-form__socials--google
                  btn btn-size-S btn--switch-icon
                "
              >
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png"
                  alt=""
                  class="auth-form__icon-google"
                />
                <span class="auth-form__socials-title">
                  Kết nối với Google
                </span>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="add__order-cart">
      <div class="add__order-cart-img">
        <i class="add__order-cart-icon fas fa-check-circle"></i>
      </div>
      <div class="add__order-cart-text">Sản phẩm đã được thêm vào giỏ hàng</div>
    </div>
    <script src="./assets/javascript/openForm.js"></script>
    <script src="./assets/javascript/BtnSort.js"></script>
    <script src="./assets/javascript/updateQuantity.js"></script>
    <script>
      var addCartBtn = document.querySelector(".item__description-order-cart");
      var orderCart = document.querySelector(".add__order-cart");

      addCartBtn.onclick = function () {
        orderCart.style.display = "flex";
        setTimeout(function () {
          orderCart.style.display = "none";
        }, 3000);
      };
    </script>
  </body>
</html>
