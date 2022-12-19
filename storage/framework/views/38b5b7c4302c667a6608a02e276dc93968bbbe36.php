<?php $__env->startSection('content'); ?>


        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
       
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <div class="row">
      </div>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

            

              <h3><?php echo e($datakerja); ?></h3>

         
              <p>Kerjasama Aktif</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="<?php echo e(url('kerjasama')); ?>" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php $__currentLoopData = $aktif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h3><?php echo e($ak->aktif); ?></h3>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <p>Kerjasama Aktif</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="<?php echo e(url('aktif')); ?>" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              
                <?php $__currentLoopData = $berakhir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h3><?php echo e($ab->berakhir); ?></h3>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <p>Kerjasama Berakhir</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo e(url('berakhir')); ?>" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <?php $__currentLoopData = $akanberakhir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h3><?php echo e($ak->akanberakhir); ?></h3>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <p>Kerjasama Akan Berakhir</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo e(url('akan_berakhir')); ?>" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->

     
        <!-- ./col -->

        <!-- ./col -->

      </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>