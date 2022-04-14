<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo $__env->yieldPushContent('title'); ?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href=<?php echo e(asset("assets/plugins/fontawesome-free/css/all.min.css")); ?>>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=<?php echo e(asset("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")); ?>>
  <!-- Theme style -->
  <link rel="stylesheet" href=<?php echo e(asset("assets/dist/css/adminlte.min.css")); ?>>
  <?php if(!Session::has('username')): ?>
      <script>
        window.location.href="<?php echo e(url('/')); ?>";
      </script>
  <?php endif; ?>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src=<?php echo e(asset("assets/dist/img/AdminLTELogo.png")); ?> alt="AdminLTELogo" height="60" width="60">
  </div>

 <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/mlm/resources/views/admin/header.blade.php ENDPATH**/ ?>