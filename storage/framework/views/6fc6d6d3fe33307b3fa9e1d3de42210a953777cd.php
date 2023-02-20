<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('custom_js/sweetalert.js')); ?>?v=<?php echo e(time()); ?>"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('custom.css')); ?>" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Laravel Project</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo e(route('usersList')); ?>">Users</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH C:\Users\Nivedya\laravel-project\resources\views/layouts/app.blade.php ENDPATH**/ ?>