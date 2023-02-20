
<?php $__env->startSection('content'); ?>
<div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <form id="userform" name="userform">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" aria-describedby="emailHelp" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" aria-describedby="emailHelp" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="role">Select Role</label>
                <select class="form-control" name="role_id" id="role">
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $("#userform").submit(function(e) {
            e.preventDefault();
            var form        = $('#userform')[0];
            var formData    = new FormData(form);
            $.ajax({ 
                type: 'post',
                url: '/users-store',
                contentType: false,
                processData: false,
                data: formData,
                beforeSend: function (request) {
                  return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                },
                success: function(response){
                    console.log(response);
                    if(response.status=='success'){
                       swal({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Done !',
                        text: response.message,            
                        showConfirmButton: false,
                        closeOnClickOutside: false
                      }).then((result) => {                    
                        window.location.href = '/users-list';
                      }); 
                   }else{
                    swal({
                      position: 'top-end',
                      icon: 'error',
                      title: 'Oops...',
                      text: response.message,
                      showConfirmButton: true,
                    })
                   }
                }
            });
        });
    });
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nivedya\laravel-project\resources\views/users/create.blade.php ENDPATH**/ ?>