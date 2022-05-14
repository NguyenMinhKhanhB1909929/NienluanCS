<?php include "../nienluan/include/header.php"; ?>
<?php
  if($_SERVER['REQUEST_METHOD']=='POST') {
    $tukhoa = $_POST['search'];
    $search_product = $pd->searchProduct($tukhoa);
  }
?>
      <div class="app__container">
        <div class="grid">
          <div class="banner">
            <img src="./assets/img/banner.png" class="banner_img" alt="" />
          </div>
          <div class="trademark">
            <img src="./assets/img/xiaomi.jpg" class="trademark-img" alt="" />
            <img
              src="./assets/img/samsung-img.jpg"
              class="trademark-img"
              alt=""
            />
            <img src="./assets/img/msi-img.jpg" class="trademark-img" alt="" />
            <img src="./assets/img/hp-img.jpg" class="trademark-img" alt="" />
            <img
              src="./assets/img/apple-img.jpg"
              class="trademark-img"
              alt=""
            />
            <img src="./assets/img/asus-img.jpg" class="trademark-img" alt="" />
          </div>
          <div class="item-highlight">
            <span class="text-item-highlight">SẢN PHẨM THEO NHU CẦU</span>
            <div class="items-highlight">
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/432b8d98e98460fc9f1d3a04d1818f6f);
                  "
                ></div>
                <div class="text-item">GAMING</div>
              </div>
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/b8ae87c9b51fb3b795eba17051a891b5);
                  "
                ></div>
                <div class="text-item">MỎNG NHẸ</div>
              </div>
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/09c2f034008754ef305ad3c4d16d8b3c);
                  "
                ></div>
                <div class="text-item">MACBOOK</div>
              </div>
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/d8c891e04742f6ae3f2e2bb0ed4272b1);
                  "
                ></div>
                <div class="text-item">TRUYỀN THÔNG</div>
              </div>
            </div>
          </div>
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <a
              href="./FormUser.php"
              class=""
              style="color: inherit; text-decoration: none"
              >Trang chủ</a
            >
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="link__curr-text isHere">Tìm kiếm</span>
          </div>
          <div class="grid__row app__content">
            <div class="grid__column-2">
              <nav class="category">
                <h3 class="category__heading">
                  <i class="category__heading-icon fas fa-list"></i>
                  Danh mục
                </h3>
                <ul class="category-list">
                  <li class="category-item1 category-item--active">
                    <div class="category-item__link">Tất cả</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">Laptop</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">Máy tính Gaming</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">Macbook</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">Phụ kiện Laptop</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">
                      Thêm
                      <i class="icon-ctg-item fas fa-angle-down"></i>
                    </div>
                  </li>
                </ul>
              </nav>
              <nav class="category">
                <h3 class="category__heading">
                  <i class="category__heading-icon fas fa-coins"></i>
                  Khoảng giá
                </h3>
                <ul class="category-list">
                  <li class="category-item category-item--active">
                    <div class="category-item__link">Tất cả</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Dưới 10 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Từ 10 - 15 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Từ 15 - 20 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Từ 20 - 25 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Trên 25 triệu</div>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="grid__column-10">
              <div class="text-search-content">
                <i class="text-search-icon fas fa-search-plus"></i>
                <span class="text-search-content-title"
                  >Kết quả của tìm kiếm "
                  <span class="text-search-main">Laptop</span> "</span
                >
              </div>
              <!-- Home Filter -->
              <div class="home-filter">
                <span class="home-filter__label">Sắp xếp theo</span>
                <button class="home-filter__btn btn btn-primary">
                  Phổ biến
                </button>
                <button class="home-filter__btn btn">Mới nhất</button>
                <button class="home-filter__btn btn">Bán chạy</button>

                <div class="select-input">
                  <span class="select-input__label">Giá</span>
                  <i class="select-input__icon fas fa-angle-down"></i>
                  <!-- List option -->
                  <ul class="select-input__list">
                    <li class="select-input__item1">
                      <div class="select-input__link">Giá: Thấp đến cao</div>
                    </li>
                    <li class="select-input__item1">
                      <div class="select-input__link">Giá: Cao đến thấp</div>
                    </li>
                  </ul>
                </div>
                <div class="select-input">
                  <span class="select-input__label">Thương hiệu</span>
                  <i class="select-input__icon fas fa-angle-down"></i>
                  <!-- List option -->
                  <ul class="select-input__list">
                    <li class="select-input__item">
                      <div class="select-input__link">ASUS</div>
                    </li>
                    <li class="select-input__item">
                      <div class="select-input__link">DELL</div>
                    </li>
                    <li class="select-input__item">
                      <div class="select-input__link">HP</div>
                    </li>
                  </ul>
                </div>

                <div class="home-filter__page">
                  <span class="home-filter__page-num">
                    <span class="home-filter__page-current">1</span>/2
                  </span>
                  <div class="home-filter__page-control">
                    <a
                      href=""
                      class="
                        home-filter__page-btn home-filter__page-btn--disable
                      "
                    >
                      <i class="fas fa-angle-left"></i>
                    </a>
                    <a href="" class="home-filter__page-btn">
                      <i class="fas fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- San Pham -->
              <div class="home-product page-current">
                <div class="grid__row laptop-item">
                  <!-- ----------------------------------------------------------------------- -->
                  <div class="grid__column-2-4">
                    <a href="./ItemDes.php" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB
                          R7-5800H 8G 512G 144Hz W10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >35.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >30.990.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                          </div>
                          <span class="home-product-item__sold">18 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >14%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/72741deedf79d2325d721aea0e1aceeb);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop ASUS FX506LH-HN002T GTX1650 i5-10300H 8G 512G
                          15.6'' W10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >21.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >21.170.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">47 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >4%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/4e57d35593e841c1ecb59670215a1aaf_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop ASUS ROG G512-IAL013T GTX1650Ti i5-10300H 8G
                          512G 144Hz
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >25.490.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">5 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/79302a0832fe8a5d02c841bfa4de5b7f_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop MSI GF75 Thin 10SCXR-013VN i7-10750H 8GB 512GB
                          GTX1650 17.3" FHD 144Hz Win 10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >23.490.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">2 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/48112fa74a9644bbae9ff4d2f9d52749_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop HP Pavilion Gaming 15-ec1056AX (1N1J6PA)
                          R7-4800H | 8GB | 512GB | VGA GTX 1650 4GB | 15.6" FHD
                          144Hz | Win 10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >26.800.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >20.399.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">15 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >24%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/928f6e30e300f5938bcdcf6ee8a95728_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Dell Inspiron 3583 (Core i5-8265U | Ram 8GB |
                          SSD 256GB | 15.6 inch HD Touch)
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >43.500.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">0 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/28ce3982dbcd64a485bad85c027cd7ef_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Asus VivoBook A412FA i3-10110U/ 4Gb Ram/ 512Gb
                          SSD/ Intel HD Graphics/ 14.0 inch FHD/ win10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >22.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >19.990.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">10 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >13%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/5e02016132da0cb33eaaeea8c96d5438_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Asus UX331UAL EG021TS i5-8250, 8Gb Ram, SSD
                          512GB, intel HD Graphics, Win 10, 13.3 inch FHD
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >24.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >17.150.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">15 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >31%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/9f92923c18b9bcdbad84f88a8dd65ac9_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Acer Aspire 5 A515-56G-51YL i5-1135G7 | 8GB |
                          512GB | VGA MX350 2GB | 15.6'' FHD | Win 10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >18.500.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">16 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/a32811b818f52fc7a55f23a098635228_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Dell Vostro 5581 i5-8265, 4Gb Ram, 1Tb HDD,
                          Intel HD Graphics, 15.6 inch FHD, Win10 (70175950)
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >20.250.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">0 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="home-product">
                <div class="grid__row laptop-item">
                  <!-- ----------------------------------------------------------------------- -->
                  <div class="grid__column-2-4">
                    <a href="./ItemDes.php" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB
                          R7-5800H 8G 512G 144Hz W10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >35.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >30.990.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                          </div>
                          <span class="home-product-item__sold">18 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >14%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/72741deedf79d2325d721aea0e1aceeb);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop ASUS FX506LH-HN002T GTX1650 i5-10300H 8G 512G
                          15.6'' W10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >21.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >21.170.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">47 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >4%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/928f6e30e300f5938bcdcf6ee8a95728_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Dell Inspiron 3583 (Core i5-8265U | Ram 8GB |
                          SSD 256GB | 15.6 inch HD Touch)
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >43.500.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">0 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/28ce3982dbcd64a485bad85c027cd7ef_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Asus VivoBook A412FA i3-10110U/ 4Gb Ram/ 512Gb
                          SSD/ Intel HD Graphics/ 14.0 inch FHD/ win10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >22.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >19.990.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">10 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >13%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/5e02016132da0cb33eaaeea8c96d5438_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Asus UX331UAL EG021TS i5-8250, 8Gb Ram, SSD
                          512GB, intel HD Graphics, Win 10, 13.3 inch FHD
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >24.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >17.150.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">15 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >31%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/9f92923c18b9bcdbad84f88a8dd65ac9_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Acer Aspire 5 A515-56G-51YL i5-1135G7 | 8GB |
                          512GB | VGA MX350 2GB | 15.6'' FHD | Win 10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >18.500.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">16 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/a32811b818f52fc7a55f23a098635228_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Dell Vostro 5581 i5-8265, 4Gb Ram, 1Tb HDD,
                          Intel HD Graphics, 15.6 inch FHD, Win10 (70175950)
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >20.250.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">0 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Pagination -->
              <ul class="pagination">
                <li class="pagination-item">
                  <div class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-left"></i>
                  </div>
                </li>
                <li class="pagination-item-page pagination-item__active">
                  <div class="pagination-item__link">1</div>
                </li>
                <li class="pagination-item-page">
                  <div class="pagination-item__link">2</div>
                  <!-- </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">3</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">4</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">5</a>
                </li>
                <li class="pagination-item">
                  <span
                    class="
                      pagination-item__link--no-hover pagination-item__link
                    "
                    >...</span
                  >
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">14</a>
                </li> -->
                </li>

                <li class="pagination-item">
                  <div href="" class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-right"></i>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

 <?php include "../nienluan/include/footer.php"; ?>
