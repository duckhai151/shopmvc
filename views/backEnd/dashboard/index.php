<?php Session::init(); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <div class="alert">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <strong>Xin chào bạn:
          <?php 
          echo '<pre>';
          print_r($_SESSION['ad']['permission']); 
          echo '</pre>';
          ?>
            
          </strong>
       </div>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <table class="table table-hover" border="1px solid black">
            <thead>
              <tr>
                <td align="center">TỔNG SỐ ĐƠN HÀNG</td>
                <td align="center">TỔNG SỐ KHÁCH HÀNG</td>
                <td align="center">TỔNG SỐ DOANH THU</td>
                <td align="center">TỔNG SỐ SẢN PHẨM</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="pull-left">
                    <img src="https://www.freepngimg.com/thumb/cart/2-2-cart-png-file.png" width="100">
                  </div>
                  <div class="pull-right" style="line-height: 100px">đơn hàng</div>
                </td>
                <td>
                  <div class="pull-left">
                    <img src="https://www.freepngimg.com/thumb/youtube/62644-profile-account-google-icons-computer-user-iconfinder.png" width="100">
                  </div>
                  <div class="pull-right" style="line-height: 100px">khách hàng</div>
                </td>
                <td>
                  <div class="pull-left">
                    <img src="https://cdn3.iconfinder.com/data/icons/cash-card-add-on-glyph/48/Sed-36-512.png" width="100">
                  </div>
                  <div class="pull-right" style="line-height: 100px">ABC</div>
                </td>
                <td>
                  <div class="pull-left">
                    <img src="http://pngriver.com/wp-content/uploads/2018/04/Download-Product-Png-Image-59157-For-Designing-Projects.png" width="100">
                  </div>
                  <div class="pull-right" style="line-height: 100px">sản phẩm</div>
                </td>
              
              </tr>
            </tbody>
          </table>
        </div>
<!--         <div class="box-body">
          hihi
        </div> -->
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>
