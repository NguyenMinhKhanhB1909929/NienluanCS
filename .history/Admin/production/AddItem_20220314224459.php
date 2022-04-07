<?php include "./adminInclude/adminHeader.php"; ?>
        <!-- /top navigation -->

        <!-- page content -->
         <style>
      .form-control {
        height: auto;
      }
      label {
        font-size: 16px;
      }
    </style>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Thêm sản phẩm</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Tìm kiếm ..."
                    />
                    <span class="input-group-btn">
                      <button
                        class="btn btn-default"
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
                  <div class="x_title" style="text-align: center; width: 100%">
                    <h2 style="font-size: 28px; float: none; color: black">
                      Thông tin sản phẩm
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Mã sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="PC548-53-CD06"
                            disabled="disabled"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Tên sản phẩm:
                        </label>
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Tên sản phẩm ..."
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Loại sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <select name="" id="" class="form-control">
                            <option value="">Loại sản phẩm ...</option>
                            <option value="">Laptop Gaming</option>
                            <option value="">Laptop văn phòng</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Hình ảnh sản phẩm sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="file"
                            class="form-control"
                            placeholder="Loại sản phẩm"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Giá sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Giá sản phẩm ..."
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Số lượng sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Số lượng sản phẩm ..."
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Mô tả chi tiết sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9"></div>
                      </div>
                      <div class="x_content">
                        <div id="alerts"></div>
                        <div
                          class="btn-toolbar editor"
                          data-role="editor-toolbar"
                          data-target="#editor-one"
                        >
                          <div class="btn-group">
                            <a
                              class="btn dropdown-toggle"
                              data-toggle="dropdown"
                              title="Font"
                              ><i class="fa fa-font"></i><b class="caret"></b
                            ></a>
                            <ul class="dropdown-menu"></ul>
                          </div>

                          <div class="btn-group">
                            <a
                              class="btn dropdown-toggle"
                              data-toggle="dropdown"
                              title="Font Size"
                              ><i class="fa fa-text-height"></i>&nbsp;<b
                                class="caret"
                              ></b
                            ></a>
                            <ul class="dropdown-menu">
                              <li>
                                <a data-edit="fontSize 5">
                                  <p style="font-size: 17px">Huge</p>
                                </a>
                              </li>
                              <li>
                                <a data-edit="fontSize 3">
                                  <p style="font-size: 14px">Normal</p>
                                </a>
                              </li>
                              <li>
                                <a data-edit="fontSize 1">
                                  <p style="font-size: 11px">Small</p>
                                </a>
                              </li>
                            </ul>
                          </div>

                          <div class="btn-group">
                            <a
                              class="btn"
                              data-edit="bold"
                              title="Bold (Ctrl/Cmd+B)"
                              ><i class="fa fa-bold"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="italic"
                              title="Italic (Ctrl/Cmd+I)"
                              ><i class="fa fa-italic"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="strikethrough"
                              title="Strikethrough"
                              ><i class="fa fa-strikethrough"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="underline"
                              title="Underline (Ctrl/Cmd+U)"
                              ><i class="fa fa-underline"></i
                            ></a>
                          </div>

                          <div class="btn-group">
                            <a
                              class="btn"
                              data-edit="insertunorderedlist"
                              title="Bullet list"
                              ><i class="fa fa-list-ul"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="insertorderedlist"
                              title="Number list"
                              ><i class="fa fa-list-ol"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="outdent"
                              title="Reduce indent (Shift+Tab)"
                              ><i class="fa fa-dedent"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="indent"
                              title="Indent (Tab)"
                              ><i class="fa fa-indent"></i
                            ></a>
                          </div>

                          <div class="btn-group">
                            <a
                              class="btn"
                              data-edit="justifyleft"
                              title="Align Left (Ctrl/Cmd+L)"
                              ><i class="fa fa-align-left"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="justifycenter"
                              title="Center (Ctrl/Cmd+E)"
                              ><i class="fa fa-align-center"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="justifyright"
                              title="Align Right (Ctrl/Cmd+R)"
                              ><i class="fa fa-align-right"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="justifyfull"
                              title="Justify (Ctrl/Cmd+J)"
                              ><i class="fa fa-align-justify"></i
                            ></a>
                          </div>

                          <div class="btn-group">
                            <a
                              class="btn dropdown-toggle"
                              data-toggle="dropdown"
                              title="Hyperlink"
                              ><i class="fa fa-link"></i
                            ></a>
                            <div class="dropdown-menu input-append">
                              <input
                                class="span2"
                                placeholder="URL"
                                type="text"
                                data-edit="createLink"
                              />
                              <button class="btn" type="button">Add</button>
                            </div>
                            <a
                              class="btn"
                              data-edit="unlink"
                              title="Remove Hyperlink"
                              ><i class="fa fa-cut"></i
                            ></a>
                          </div>

                          <div class="btn-group">
                            <a
                              class="btn"
                              title="Insert picture (or just drag & drop)"
                              id="pictureBtn"
                              ><i class="fa fa-picture-o"></i
                            ></a>
                            <input
                              type="file"
                              data-role="magic-overlay"
                              data-target="#pictureBtn"
                              data-edit="insertImage"
                            />
                          </div>

                          <div class="btn-group">
                            <a
                              class="btn"
                              data-edit="undo"
                              title="Undo (Ctrl/Cmd+Z)"
                              ><i class="fa fa-undo"></i
                            ></a>
                            <a
                              class="btn"
                              data-edit="redo"
                              title="Redo (Ctrl/Cmd+Y)"
                              ><i class="fa fa-repeat"></i
                            ></a>
                          </div>
                        </div>

                        <div id="editor-one" class="editor-wrapper"></div>

                        <textarea
                          name="descr"
                          id="descr"
                          style="display: none"
                        ></textarea>

                        <br />
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group" style="text-align: center">
                        <div
                          class="col-md-12 col-sm-12 offset-md-3"
                          style="margin: 0"
                        >
                          <button
                            type="button"
                            class="btn btn-primary"
                            style="margin: 0 8px; width: 90px"
                          >
                            Hủy
                          </button>
                          <button
                            type="reset"
                            class="btn btn-primary"
                            style="margin: 0 8px; width: 90px"
                          >
                            Reset
                          </button>
                          <button
                            type="submit"
                            class="btn btn-success"
                            style="margin: 0 8px; width: 90px"
                          >
                            Thêm
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            &copy; Copyright by
            <a href="https://colorlib.com">KhanhB1909929</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
