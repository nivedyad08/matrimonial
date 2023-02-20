
<?php $__env->startSection('title', 'Create | User'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="col-md-12 row">
        <div class=" form-group">
            <a href="<?php echo e(url('user-create')); ?>"><button type="button" class="btn btn-primary" id="create">Create</button></a>
        </div>
    </div>
    <div class="card">
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e(++$key); ?></th>
                  <td><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></td>
                  <td><?php echo e($user->email); ?></td>
                  <td><?php echo e($user->getRole->name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nivedya\laravel-project\resources\views/users/index.blade.php ENDPATH**/ ?>