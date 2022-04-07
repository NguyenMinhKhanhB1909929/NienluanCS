<?php include "../nienluan/include/header.php"; ?>

      <div class="app__container">
        <div class="grid">
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <a
              href="./FormUser.html"
              class=""
              style="color: inherit; text-decoration: none"
              >Trang chủ</a
            >
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="link__curr-text isHere">Tài khoản của tôi</span>
          </div>
          <div class="grid__row app__content">
            <div class="grid__column-2">
              <div class="myuser__navbar">
                <div class="myuser__navbar-des-wrap">
                  <div class="myuser__navbar-des-img-wrap">
                    <img
                      src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                      alt=""
                      class="myuser__navbar-des-img"
                    />
                  </div>
                  <div class="myuser__navbar-des-name-wrap">
                    <div class="myuser__navbar-des-name">KhanhB1909929</div>
                    <div class="myuser__navbar-des-setting">
                      <i class="myuser__navbar-des-setting-icon fas fa-pen"></i>
                      <span class="myuser__navbar-des-setting-title"
                        >Sửa hồ sơ</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="myuser__navbar-des">
                <div class="myuser__navbar-des-title-wrap">
                  <i class="myuser__navbar-des-title-icon fas fa-user"></i>
                  <span class="myuser__navbar-des-title-text"
                    >Tài khoản của tôi</span
                  >
                </div>
                <a
                  href="./myuser.html"
                  class="myuser__navbar-des-content ishover"
                  >Hồ sơ</a
                >
                <a href="./changePass.html" class="myuser__navbar-des-content"
                  >Đổi mật khẩu</a
                >
                <div class="myuser__navbar-des-title-wrap">
                  <i class="myuser__navbar-des-title-icon fas fa-clipboard"></i>
                  <a href="./myorder.html" class="myuser__navbar-des-title-text"
                    >Đơn mua</a
                  >
                </div>
              </div>
            </div>

            <div class="grid__column-10">
              <div class="myuser__content">
                <h1 class="myuser__content-title">Hồ sơ của tôi</h1>
                <div class="myuser__container">
                  <div class="grid__col-7">
                    <div class="myuser__content-wrap">
                      <div class="myuser__content-name-wrap">
                        <div class="myuser__content-label">Tên Đăng nhập:</div>
                        <span class="myuser__content-name-input"
                          >KhanhB1909929</span
                        >
                      </div>
                      <div class="myuser__content-fullname-wrap">
                        <div class="myuser__content-label">Họ và tên:</div>
                        <input
                          type="text"
                          class="myuser__content-fullname-input"
                          value="Nguyễn Minh Khánh"
                        />
                      </div>
                      <div class="myuser__content-email-wrap">
                        <div class="myuser__content-label">Email:</div>
                        <span class="myuser__content-email-input"
                          >Kh*************@student.ctu.edu.vn</span
                        >
                        <a href="/" class="myuser__content-setting">Thay dổi</a>
                      </div>
                      <div class="myuser__content-phone-wrap">
                        <div class="myuser__content-label">Số điện thoại:</div>
                        <span class="myuser__content-phone-input"
                          >07******40</span
                        >
                        <a href="/" class="myuser__content-setting">Thay đổi</a>
                      </div>
                      <div class="myuser__content-sex-wrap">
                        <div class="myuser__content-label">Giới tính:</div>
                        <input
                          type="radio"
                          name="sex"
                          class="myuser__content-sex-input"
                          checked
                        />
                        <span class="myuser__content-sex-input-label">Nam</span>
                        <input
                          type="radio"
                          name="sex"
                          class="myuser__content-sex-input"
                        />
                        <span class="myuser__content-sex-input-label">Nữ</span>
                      </div>
                      <div class="myuser__content-date-wrap">
                        <div class="myuser__content-label">Ngày sinh:</div>
                        <select name="" id="" class="myuser__content-date">
                          <option value="">14</option>
                        </select>
                        <select name="" id="" class="myuser__content-date">
                          <option value="">Tháng 10</option>
                        </select>
                        <select name="" id="" class="myuser__content-date">
                          <option value="">2000</option>
                        </select>
                      </div>
                      <div class="myuser__content-address-wrap">
                        <div class="myuser__content-label">Địa chỉ:</div>
                        <input
                          type="text"
                          class="myuser__content-address-input"
                          value="46/14, KV5"
                        />
                      </div>
                      <div class="myuser__content-address-des-wrap">
                        <div class="myuser__content-label">Tỉnh thành:</div>
                        <select
                          name=""
                          id=""
                          class="myuser__content-address-des-select1"
                        >
                          <option
                            value=""
                            class="myuser__content-address-des-option"
                          >
                            Cần Thơ
                          </option>
                        </select>
                      </div>
                      <div class="myuser__content-address-des-wrap">
                        <div class="myuser__content-label">Quận huyện:</div>
                        <select
                          name=""
                          id=""
                          class="myuser__content-address-des-select1"
                        >
                          <option
                            value=""
                            class="myuser__content-address-des-option"
                          >
                            Quận Bình Thủy
                          </option>
                        </select>
                      </div>
                      <div class="myuser__content-address-des-wrap">
                        <div class="myuser__content-label">Phường xã:</div>
                        <select
                          name=""
                          id=""
                          class="myuser__content-address-des-select1"
                        >
                          <option
                            value=""
                            class="myuser__content-address-des-option"
                          >
                            Phường Bình Thủy
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="gird__col-5 myuser__content-main">
                    <div class="myuser__content-main-img-wrap">
                      <img
                        src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                        alt=""
                        class="myuser__content-main-img"
                      />
                    </div>
                    <div class="myuser__content-main-btn-wrap">
                      <a href="" class="myuser__content-main-btn">Chọn Ảnh</a>
                    </div>
                    <h4 class="myuser__content-main-des">
                      Dụng lượng file tối đa 1 MB
                    </h4>
                    <h4 class="myuser__content-main-des">
                      Định dạng:.JPEG, .PNG
                    </h4>
                  </div>
                </div>
                <div class="myuser__content-save-wrap">
                  <a href="/" class="myuser__content-save-btn">Lưu</a>
                </div>
              </div>
            </div>
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
