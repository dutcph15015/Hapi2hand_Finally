<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Thêm mới Mã giảm giá</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo e(route('admin.category.index')); ?>"> Category</a></li>
            <li class="active"> Create </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    <?php echo $__env->make('admin.discount_code.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ADMIN\web_ban_giay_L9\web_ban_giay_Hapi2hand_Finally\resources\views/admin/discount_code/create.blade.php ENDPATH**/ ?>