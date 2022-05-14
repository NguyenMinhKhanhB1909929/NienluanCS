<?php include_once "./adminInclude/adminHeader.php"; ?>
        <!-- /top navigation -->
<?php
  include_once ("../../classes/user.php");
  $us = new user();
  ?>
        <!-- page content -->
        <style>
      th,
      td {
        text-align: center;
      }
    </style>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Khách hàng<small></small></h3>
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
                    <h2 style="color: black; font-size: 28px; float: none">
                      Thông tin khách hàng
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
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
                                <th>ID</th>
                                <th>Email</th>
                                <th>Họ và tên</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Thao tác</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $getUser = $us->getUser();

                              ?>
                              <tr>
                                <td>01</td>
                                <td>khanhB1909929@student.ctu.edu.vn</td>
                                <td>Nguyễn Minh Khánh</td>
                                <td>0784432140</td>

                                <td>
                                  46/14, KV5, phường Bình Thủy, Quận Bình Thủy,
                                  Thành phố Cần Thơ
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
                                <td>02</td>
                                <td>khanhnguyn123@gmail.com</td>
                                <td>Nguyễn Việt Khánh</td>
                                <td>01216031410</td>

                                <td>
                                  47/24, KV6, phường Trà Nóc, Quận Bình Thủy,
                                  Thành phố Cần Thơ
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
                                <td>03</td>
                                <td>tritr1254@gmail.com</td>
                                <td>Trần Minh Trí</td>
                                <td>024599945</td>

                                <td>
                                  23/10, KV2, phường Xuân Khánh, Quận Ninh Kiều,
                                  Thành phố Cần Thơ
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
  <?php include_once "./adminInclude/adminFooter.php"; ?>