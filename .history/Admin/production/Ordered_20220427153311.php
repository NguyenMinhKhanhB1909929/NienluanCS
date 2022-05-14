<?php include_once "./adminInclude/adminHeader.php"; ?>
<?php
  include_once ("../../classes/cart.php");
   include_once ("../../helpers/format.php");
?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Đơn hàng<small></small></h3>
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
                      placeholder="Tìm kiếm..."
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
                    <h2 style="width: 100%; color: black; font-size: 28px">
                      Đơn hàng chưa được duyệt<small></small>
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <table
                            id="datatable"
                            class="table table-striped table-bordered"
                            style="width: 100%"
                          >
                            <thead>
                              <tr>
                                <th>ID Khách hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Ngày giao hàng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Tổng tiền</th>
                                <th>Xem chi tiết</th>
                              </tr>
                            </thead>
                            <?php
                              $ct = new cart();
                              $fm = new format();
                              $getOrder = $ct->getOrderNotYet();
                              if($getOrder) {
                                while($resultOrder = $getOrder->fetch_assoc()) {
                            ?>
                            <tbody>
                              <tr>
                                <td><?php echo $resultOrder['userId'];?></td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-date">
                                      <?php echo $fm->formatDate($resultOrder['date_order']);?>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div
                                    class="date-wrap"
                                    style="position: relative"
                                  >
                                    <input
                                      type="text"
                                      value="dd/mm/yyyy"
                                      style="
                                        padding: 4px 4px 4px 6px;
                                        width: 140px;
                                        font-size: 16px;
                                      "
                                    />
                                    <i
                                      class="fa fa-calendar"
                                      style="
                                        position: absolute;
                                        top: 10px;
                                        right: 20px;
                                        font-size: 16px;
                                      "
                                    ></i>
                                  </div>
                                </td>
                                <td>Chuyển khoản</td>
                                <td>
                                  <select style="padding: 4px 8px">
                                    <option value="0">Chưa duyệt</option>
                                    <option value="1">Đã duyệt</option>
                                  </select>
                                </td>
                                <td><?php echo $resultOrder['price'];?></td>
                                <td>
                                  <a
                                    href="./OrderDes.php?userId=<?php echo $resultOrder['userId'];?>"
                                    class="table-see-wrap"
                                    style="
                                      color: #001fff;
                                      text-decoration: none;
                                    "
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                            <?php
                                }
                              }?>
                          </table>
                        </div>
                        <div class="prev-ordered">
                          <a
                            href="./Ordered.php"
                            style="
                              font-size: 18px;
                              line-height: 18px;
                              background-color: #2a3f54;
                              padding: 8px 16px;
                              color: white; ;
                            "
                            >Lưu</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title" style="width: 100%; text-align: center">
                    <h2 style="width: 100%; color: black; font-size: 28px">
                      Đơn hàng đã được duyệt<small></small>
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <table
                            id="datatable"
                            class="table table-striped table-bordered"
                            style="width: 100%"
                          >
                            <thead>
                              <tr>
                                <th>ID Khách hàng</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Ngày giao hàng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Tổng tiền</th>
                                <th>Xem chi tiết</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>02</td>
                                <td>FC356423</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">2:45pm</div>
                                    <div class="table-time-date">6/12/2021</div>
                                  </div>
                                </td>
                                <td>7/12/2021</td>
                                <td>Chuyển khoản</td>
                                <td>Đã duyệt</td>
                                <td>25.990.990đ</td>
                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>FC141750</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">5:18pm</div>
                                    <div class="table-time-date">5/12/2021</div>
                                  </div>
                                </td>
                                <td>6/12/2021</td>
                                <td>Chuyển khoản</td>
                                <td>Đã duyệt</td>
                                <td>30.990.000đ</td>
                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>FC195263</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">7:33pm</div>
                                    <div class="table-time-date">4/12/2021</div>
                                  </div>
                                </td>
                                <td>5/12/2021</td>
                                <td>Chuyển khoản</td>
                                <td>Đã duyệt</td>
                                <td>39.990.000đ</td>
                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
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
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title" style="width: 100%; text-align: center">
                    <h2 style="width: 100%; color: black; font-size: 28px">
                      Đơn hàng đã hủy<small></small>
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <table
                            id="datatable"
                            class="table table-striped table-bordered"
                            style="width: 100%"
                          >
                            <thead>
                              <tr>
                                <th>ID Khách hàng</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt hàng</th>

                                <th>Tình trạng đơn hàng</th>
                                <th>Lý do hủy</th>

                                <th>Xem chi tiết</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>01</td>
                                <td>FC143584</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">4:13pm</div>
                                    <div class="table-time-date">5/12/2021</div>
                                  </div>
                                </td>

                                <td>Đã Hủy</td>
                                <td>Đặt nhầm sản phẩm</td>

                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>02</td>
                                <td>FC845612</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">5:53pm</div>
                                    <div class="table-time-date">4/12/2021</div>
                                  </div>
                                </td>

                                <td>Đã Hủy</td>
                                <td>Kinh tế không đủ</td>

                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>FC456328</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">3:33pm</div>
                                    <div class="table-time-date">3/12/2021</div>
                                  </div>
                                </td>
                                <td>Đã Hủy</td>
                                <td>Không muốn mua</td>

                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
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