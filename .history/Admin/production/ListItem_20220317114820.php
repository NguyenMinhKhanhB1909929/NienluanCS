<?php include "./adminInclude/adminHeader.php"; ?>
        <!-- /top navigation -->

        <!-- page content -->
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
                            <div class="table-add-item-btn"><a href="./AddItem.php" style="color: white;"> Thêm sản phẩm</a></div>
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
                              <?php
                                for($i = 1; i<=5;i++) {
                              ?>
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
                              <?php
                                }
                              ?>
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