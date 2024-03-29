<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>NMK - ADMIN</title>

    <!-- Bootstrap -->
    <link
      href="../vendors/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      href="../vendors/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <!-- bootstrap-progressbar -->
    <link
      href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
    />
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link
      href="../vendors/bootstrap-daterangepicker/daterangepicker.css"
      rel="stylesheet"
    />

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" />
    <style>
      th,
      td {
        text-align: center;
        margin: auto;
      }
      .table-search {
        font-size: 16px;
        padding: 2px 8px;
        margin-right: -1px;
        width: 255px;
      }
      .table-add-item-btn {
        background-color: #2a3f54;
        color: white;
        font-size: 16px;
        padding: 4px 12px;
        border-radius: 2px;
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0">
              <a href="index.html" class="site_title"
                ><img
                  src="../docs/images/LOGO.png"
                  alt=""
                  style="height: 50px"
                />
                <span>ADMIN</span></a
              >
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img
                  src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                  alt="..."
                  class="img-circle profile_img"
                />
              </div>
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2>Khánh Nguyễn</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div
              id="sidebar-menu"
              class="main_menu_side hidden-print main_menu"
            >
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="./AFormIndex.html"
                      ><i class="fa fa-home"></i> Trang chủ
                    </a>
                  </li>
                  <li>
                    <a
                      ><i class="fa fa-inbox"></i> Sản phẩm
                      <span class="fa fa-chevron-down"></span
                    ></a>
                    <ul class="nav child_menu" style="display: block">
                      <li class="current-page">
                        <a href="./AListItem.html">Danh sách sản phẩm</a>
                      </li>
                      <li>
                        <a href="./AAddItem.html">Thêm sản phẩm</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href="./AOrdered.html"
                      ><i class="fa fa-edit"></i> Đơn hàng</a
                    >
                  </li>
                  <li>
                    <a href="./AUser.html"
                      ><i class="fa fa-user"></i> Khách hàng
                    </a>
                  </li>
                  <li>
                    <a href="./AComment.html"
                      ><i class="fa fa-comment-o"></i>Đánh giá
                    </a>
                  </li>
                  <li>
                    <a href="./ARevenue.html"
                      ><i class="fa fa-bar-chart-o"></i> Doanh thu
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
              <ul class="navbar-right" style="position: relative">
                <li class="nav-item dropdown open" style="padding-left: 15px">
                  <a
                    href="javascript:;"
                    class="user-profile dropdown-toggle"
                    aria-haspopup="true"
                    id="navbarDropdown"
                    data-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                      alt=""
                    />Khánh Nguyễn
                  </a>
                  <div
                    class="dropdown-menu dropdown-usermenu pull-right"
                    aria-labelledby="navbarDropdown"
                  >
                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                    <a class="dropdown-item" href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                    <a class="dropdown-item" href="javascript:;">Help</a>
                    <a class="dropdown-item" href="login.html"
                      ><i class="fa fa-sign-out pull-right"></i> Log Out</a
                    >
                  </div>
                </li>

                <li
                  role="presentation"
                  class="nav-item dropdown open"
                  style="position: absolute; top: 11px; right: 172px"
                >
                  <a
                    href="javascript:;"
                    class="dropdown-toggle info-number"
                    id="navbarDropdown1"
                    data-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="fa fa-envelope-o" style="font-size: 18px"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul
                    class="dropdown-menu list-unstyled msg_list"
                    role="menu"
                    aria-labelledby="navbarDropdown1"
                  >
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"
                          ><img src="images/img.jpg" alt="Profile Image"
                        /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie
                          makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"
                          ><img src="images/img.jpg" alt="Profile Image"
                        /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie
                          makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"
                          ><img src="images/img.jpg" alt="Profile Image"
                        /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie
                          makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"
                          ><img src="images/img.jpg" alt="Profile Image"
                        /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie
                          makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Danh sách sản phẩm<small></small></h3>
              </div>

              <div class="title_right">
                <div
                  class="
                    col-md-5 col-sm-5 col-xs-12
                    form-group
                    pull-right
                    top_search
                  "
                >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Tìm kiếm ..."
                    />
                    <span class="input-group-btn">
                      <button
                        class="btn btn-secondary"
                        type="button"
                        style="background-color: #2a3f54; color: white"
                      >
                        Tìm
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title" style="width: 100%; text-align: center">
                    <h2
                      style="
                        font-size: 20px;
                        float: none;
                        color: black;
                        font-size: 28px;
                      "
                    >
                      Danh sách sản phẩm
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <div
                            class="table-search-wrap"
                            style="
                              display: flex;
                              justify-content: end;
                              align-items: center;
                              margin-bottom: 16px;
                            "
                          >
                            <input
                              type="text"
                              class="table-search"
                              placeholder="Tìm kiếm ..."
                            />
                            <i
                              class="fa fa-search"
                              style="
                                font-size: 16px;
                                border: 1px solid #6c757d;
                                background-color: #e6e6e6;
                                padding: 7px 9px;
                                margin-right: 24px;
                              "
                            ></i>
                            <div class="table-add-item-btn">Thêm sản phẩm</div>
                          </div>
                          <table
                            id="datatable-checkbox"
                            class="
                              table table-striped table-bordered
                              bulk_action
                            "
                            style="width: 100%"
                          >
                            <thead>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <th>STT</th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Giá tiền</th>
                                <th>Số lượng</th>
                                <th>Thao tác</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>1</td>
                                <td>AN515-54-RB06</td>
                                <td>
                                  Laptop Acer Nitro 5 AN515-45-R0B6 GeForce®
                                  RTX3060 6GB R7-5800H 8G 512G 144Hz W10
                                </td>
                                <td>Laptop Gaming</td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>30.990.000đ</td>
                                <td>14</td>
                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>2</td>
                                <td>FX506LH-HN002T</td>
                                <td>
                                  Laptop ASUS FX506LH-HN002T GTX1650 i5-10300H
                                  8G 512G 15.6'' W10
                                </td>
                                <td>Laptop Gaming</td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/72741deedf79d2325d721aea0e1aceeb"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>21.170.000đ</td>
                                <td>12</td>
                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>3</td>
                                <td>G512-IAL013T</td>
                                <td>
                                  Laptop ASUS ROG G512-IAL013T GTX1650Ti
                                  i5-10300H 8G 512G 144Hz
                                </td>
                                <td>Laptop Gaming</td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/4e57d35593e841c1ecb59670215a1aaf_tn"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>25.490.000đ</td>
                                <td>09</td>
                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>4</td>
                                <td>10SCXR-013VN</td>
                                <td>
                                  Laptop MSI GF75 Thin 10SCXR-013VN i7-10750H
                                  8GB 512GB GTX1650 17.3" FHD 144Hz Win 10
                                </td>
                                <td>Laptop Văn phòng</td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/79302a0832fe8a5d02c841bfa4de5b7f_tn"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>23.490.000đ</td>
                                <td>24</td>
                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>1</td>
                                <td>AN515-54-RB06</td>
                                <td>
                                  Laptop Acer Nitro 5 AN515-45-R0B6 GeForce®
                                  RTX3060 6GB R7-5800H 8G 512G 144Hz W10
                                </td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>30.990.000đ</td>
                                <td>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    checked
                                    style="width: 18px; height: 18px"
                                  />
                                </td>
                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>1</td>
                                <td>AN515-54-RB06</td>
                                <td>
                                  Laptop Acer Nitro 5 AN515-45-R0B6 GeForce®
                                  RTX3060 6GB R7-5800H 8G 512G 144Hz W10
                                </td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>30.990.000đ</td>
                                <td>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    checked
                                    style="width: 18px; height: 18px"
                                  />
                                </td>
                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>1</td>
                                <td>AN515-54-RB06</td>
                                <td>
                                  Laptop Acer Nitro 5 AN515-45-R0B6 GeForce®
                                  RTX3060 6GB R7-5800H 8G 512G 144Hz W10
                                </td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>30.990.000đ</td>
                                <td>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    checked
                                    style="width: 18px; height: 18px"
                                  />
                                </td>
                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>1</td>
                                <td>AN515-54-RB06</td>
                                <td>
                                  Laptop Acer Nitro 5 AN515-45-R0B6 GeForce®
                                  RTX3060 6GB R7-5800H 8G 512G 144Hz W10
                                </td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>30.990.000đ</td>
                                <td>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    checked
                                    style="width: 18px; height: 18px"
                                  />
                                </td>
                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>1</td>
                                <td>AN515-54-RB06</td>
                                <td>
                                  Laptop Acer Nitro 5 AN515-45-R0B6 GeForce®
                                  RTX3060 6GB R7-5800H 8G 512G 144Hz W10
                                </td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>30.990.000đ</td>
                                <td>
                                  <input
                                    type="checkbox"
                                    checked
                                    id="check-all"
                                    style="width: 18px; height: 18px"
                                  />
                                </td>
                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td>1</td>
                                <td>AN515-54-RB06</td>
                                <td>
                                  Laptop Acer Nitro 5 AN515-45-R0B6 GeForce®
                                  RTX3060 6GB R7-5800H 8G 512G 144Hz W10
                                </td>
                                <td>
                                  <img
                                    src="https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn"
                                    alt=""
                                    style="width: 80px; height: 80px"
                                  />
                                </td>
                                <td>30.990.000đ</td>
                                <td>
                                  <input
                                    type="checkbox"
                                    checked
                                    id="check-all"
                                    style="width: 18px; height: 18px"
                                  />
                                </td>

                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="
                                      font-size: 20px;
                                      color: rgb(199, 19, 19);
                                    "
                                  ></i>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
   <?php include "./adminInclude/adminFooter.php"; ?>