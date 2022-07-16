

<?php $__env->startSection('content'); ?>
<div class="col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-warning">Update View</h2>
    <form action="updatedata" method="get">
        <div class="mb-2">
            <label for="">Product Name</label>
            <input type="text" name="name" value="<?php echo e($pname); ?>" id="" class="form-control" id="">
        </div>
        <div class="mb-2">
            <label for="">Product Price</label>
            <input type="text" name="price" value="<?php echo e($pprice); ?>" id="" class="form-control" id="">
        </div>
        <br>
        <input type="hidden" name="id" value="<?php echo e($pid); ?>">
        <button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chamo\Volume (A)\Laravel Project\CRUD\resources\views/updateview.blade.php ENDPATH**/ ?>