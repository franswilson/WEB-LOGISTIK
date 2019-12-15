<section class="content-header">
  <h1>
    dashboard
    <small>it all starts here</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
  </ol>


  <div class="col-md-15">
    <!-- Info Boxes Style 2 -->
    <div class="info-box bg-gray">
      <span class="info-box-icon"><i class="fa fa-user"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">USER</span>
        <span class="info-box-number"><?php $id ?></span>

        <div class="progress">
          <div class="progress-bar" style="width: 50%"></div>
        </div>
        <span class="progress-description">
          50% Increase in 30 Days
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    <div class="info-box bg-gray">
      <span class="info-box-icon"><i class="fa fa-group"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">PEGAWAI</span>
        <span class="info-box-number"><?= $this->fungsi->tampilan()->id_user ?></span>

        <div class="progress">
          <div class="progress-bar" style="width: 20%"></div>
        </div>
        <span class="progress-description">
          20% Increase in 30 Days
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    <div class="info-box bg-gray">
      <span class="info-box-icon"><i class="fa fa-automobile"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">PENGIRIMAN</span>
        <span class="info-box-number">114</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"> </div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->


</section>