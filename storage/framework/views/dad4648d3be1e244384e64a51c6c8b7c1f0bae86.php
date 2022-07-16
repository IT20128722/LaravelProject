

<?php $__env->startSection('content'); ?>
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold fs-4 mt-5 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">CRUD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertData" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="mb-2">
            <input type="text" placeholder="Enter Product Name" class="form-control" name="pname" id=""></input>
          </div>
          <div class="mb-2">
            <input type="text" placeholder="Enter Product Price" class="form-control" name="pprice" id=""></input>
          </div>
          <div class="mb-2">
            <input type="file" class="form-control" name="image" id=""></input>
          </div>
          <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill">Add Record</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</center>

<div class="container">
  <table class="table mt-5">
    <thead class="bg-danger text-white fw-bold">
      <th>ID</th>
      <th>Product Name</th>
      <th>Product Price (Rs.)</th>
      <th>Product Image</th>
      <th>Update</th>
      <th>Delete</th>
    </thead>
    <tbody class="text-danger bg-light fs-5">
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <form action="updatedelete" method="get">
          <td class="text-black fs-6 fw-bold pt-4"><input type="hidden" name="id" value="<?php echo e($item['Id']); ?>"><?php echo e($item['Id']); ?></td>
          <td class="pt-4"><input type="hidden" name="name" value="<?php echo e($item['PName']); ?>"><?php echo e($item['PName']); ?></td>
          <td class="pt-4"><input type="hidden" name="price" value="<?php echo e($item['PPrice']); ?>"><?php echo e($item['PPrice']); ?></td>
          <td><img src="images/<?php echo e($item['PImage']); ?>" width="100px" height="100px" alt="image"></td>

          <td class="pt-4"><input type="submit" class="btn btn-outline-danger rounded-pill" name="update" value="Update"></td>
          <td class="pt-4"><input type="submit" class="btn btn-outline-danger rounded-pill" value="Delete"></td>
        </form>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chamo\Volume (A)\Laravel Project\CRUD\resources\views/insertRead.blade.php ENDPATH**/ ?>