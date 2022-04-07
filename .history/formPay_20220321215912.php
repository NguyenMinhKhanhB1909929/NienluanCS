<?php include "../nienluan/include/header.php"; ?>
      <div class="app__container">
        <div class="grid">
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <span class="">Trang chủ</span>
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="">Giỏ hàng</span>
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="isHere">Thông tin giao hàng</span>
          </div>
          <div class="user-information-wrap">
            <div class="user__info">
              <h1 class="user__infor-titile">Thông tin người nhận</h1>
              <div class="user__infor-name">
                <div class="user__infor-name-label">Họ và tên:</div>
                <input
                  type="text"
                  class="user__infor-name-input"
                  value="Nguyễn Minh Khánh"
                />
              </div>
              <div class="user__infor-email">
                <div class="user__infor-email-label">Email:</div>
                <input
                  type="text"
                  class="user__infor-email-input"
                  value="khanhb1909929@student.ctu.edu.vn"
                />
              </div>
              <div class="user__infor-phone">
                <div class="user__infor-phone-label">Số điện thoại:</div>
                <input
                  type="number"
                  class="user__infor-phone-input"
                  value="0784432140"
                />
              </div>
              <div class="user__infor-address">
                <div class="user__infor-address-label">Địa chỉ:</div>
                <input
                  type="text"
                  class="user__infor-address-input"
                  value="46/14, KV5"
                />
              </div>
              <div class="user__infor-address-select">
                <div class="user__infor-address-wrap">
                  <div class="user__infor-address-wrap-label">Tỉnh thành:</div>
                  <select name="" id="" class="user__infor-address-select1">
                    <option value="1" class="user__infor-address-option">
                      Cần Thơ
                    </option>
                    <option value="" class="user__infor-address-option">
                      TP.HCM
                    </option>
                  </select>
                </div>
                <div class="user__infor-address-wrap">
                  <div class="user__infor-address-wrap-label">Quận huyện:</div>
                  <select name="" id="" class="user__infor-address-select2">
                    <option value="" class="user__infor-address-option">
                      Quận Bình Thủy
                    </option>
                    <option value="" class="user__infor-address-option">
                      TP.HCM
                    </option>
                  </select>
                </div>
                <div class="user__infor-address-wrap">
                  <div class="user__infor-address-wrap-label">Phường xã:</div>
                  <select name="" id="" class="user__infor-address-select3">
                    <option value="" class="user__infor-address-option">
                      Phường Bình Thủy
                    </option>
                    <option value="" class="user__infor-address-option">
                      TP.HCM
                    </option>
                  </select>
                </div>
              </div>
              <div class="user__infor-note">
                <div class="user__infor-note-label">Ghi chú:</div>
                <textarea
                  name=""
                  id=""
                  cols="30"
                  rows="7"
                  class="user__infor-note-input"
                ></textarea>
              </div>
            </div>
            <div class="odered-and-payment">
              <div class="user-odered">
                <h1 class="user-odered__titile">Đơn hàng của bạn</h1>
                <div class="user-odered__item-wrap">
                  <div class="user-odered__item-img"></div>
                  <div class="user-odered__item-name">
                    Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB
                    R7-5800H 8G 512G 144Hz W10
                  </div>
                  <div style="font-size: 1.8rem; padding: 0 18px 0 0">x1</div>
                  <div class="user-odered__item-price">30.990.000đ</div>
                </div>
                <div class="separate"></div>

                <div class="user-odered__subtotal">
                  <div class="user-odered-subtotal-wrap">
                    <div class="user-odered-subtotal-title">Tạm tính</div>
                    <div class="user-odered-subtotal-price">30.990.000đ</div>
                  </div>
                  <div class="user-odered-subtotal-travel-wrap">
                    <div class="user-odered-subtotal-travel-title">
                      Phí vận chuyển
                    </div>
                    <div class="user-odered-subtotal-travel-price">
                      Miễn phí
                    </div>
                  </div>
                </div>
                <div class="separate" style="height: 2px"></div>
                <div class="user-odered__total-wrap">
                  <div class="user-odered__total-wrap-title">Tổng cộng</div>
                  <div class="user-odered__total-wrap-price">30.990.000đ</div>
                </div>
              </div>
              <div class="user-payment">
                <h1 class="user-payment-titile">Phương thức thanh toán</h1>
                <div class="user-payment-options">
                  <div class="user-payment-option-wrap">
                    <input type="radio" name="1" class="user-payment-option" />
                    <label for="" class="user-payment-option-label"
                      >Thanh toán tại cửa hàng</label
                    >
                  </div>
                  <div class="user-payment-option-wrap">
                    <input type="radio" name="1" class="user-payment-option" />
                    <label for="" class="user-payment-option-label"
                      >Thanh toán khi nhận hàng (COD)</label
                    >
                  </div>
                  <div class="user-payment-option-wrap">
                    <input type="radio" name="1" class="user-payment-option" />
                    <label for="" class="user-payment-option-label"
                      >Thanh toán trực tiếp bằng thẻ ATM, IB, QRCode qua
                      Alepay</label
                    >
                  </div>
                  <div class="user-payment-option-wrap">
                    <input type="radio" name="1" class="user-payment-option" />
                    <label for="" class="user-payment-option-label"
                      >Thanh toán trả góp online</label
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="payment-btn-wrap">
            <a
              href="./orderItem.html"
              class="payment-btn"
              style="background-color: #0e40be"
              >Quay về giỏ hàng</a
            >
            <a href="./orderedSuccess.html" class="payment-btn">Đặt hàng</a>
          </div>
        </div>
      </div>

      <footer class="footer">
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
              <div class="auth-form__form">
                <div class="auth-form__group">
                  <div class="auth-form__group-input">
                    <label for="">Email:</label>
                    <input
                      type="text"
                      id="emailReg"
                      class="auth-form__input"
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
                      id="passwordReg"
                      class="auth-form__input"
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
                      class="auth-form__input"
                      placeholder="Nhập lại mật khẩu"
                    />
                  </div>
                  <span class="form-message"></span>
                </div>
              </div>
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
                <button class="btn btn-primary">ĐĂNG KÝ</button>
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
        <form action="" id="form-login">
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
                  <a class="btn btn-primary btn-login">ĐĂNG NHẬP</a>
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
    <!-- <script src="../formValidation/validator.js"></script> -->
    <!-- <script src="./assets/javascript/itemLaptop.js"></script> -->
    <script src="./assets/javascript/openForm.js"></script>
    <!-- <script src="./assets/javascript/login.js"></script> -->
    <script src="./assets/javascript/BtnSort.js"></script>

    <!-- <script>
      Validator({
        form: "#form-login",
        errorSelector: ".form-message",
        rules: [
          Validator.isEmail("#emailLogin"),
          Validator.isPwd("#passwordLogin"),
        ],
      });
      Validator({
        form: "#form-reg",
        errorSelector: ".form-message",
        rules: [
          Validator.isEmail("#emailReg"),
          Validator.isPwd("#passwordReg", 6),
          Validator.isRePwd(
            "#passwordRegConf",
            function () {
              return document.querySelector("#form-reg #passwordReg").value;
            },
            "Mật khẩu nhập lại không đúng"
          ),
        ],
      });
    </script> -->
  </body>
</html>
