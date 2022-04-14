<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="stylesheet" href=<?php echo e(asset("assets/dist/css/main.css")); ?>>
   </head>
   <body>
      <section class="login-section" style="background-image: url('<?php echo e(asset('assets/dist/img/login-bg.jpg')); ?>');">
         <div class="container">
            <div class="row">
               <div class="col-md-5 m-auto">
                  <form action="<?php echo e(route('login-user')); ?>" class="form-wrapper" method="post">
                      <?php echo csrf_field(); ?>
                     <div class="outer-logo">
                        <div class="logo">Super Admin</div>
                     </div>
                     <div class="form-group">
                        <input type="text" placeholder="Username" name="username" class="form-control" value="<?php echo e(old('username')); ?>">
                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="bg-danger text-white mt-2 d-block rounded pl-2 pt-1 pb-1"> <?php echo e($message); ?>  </span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     </div>
                     <div class="form-group">
                        <input type="password" placeholder="Password" name="password" class="form-control" value="<?php echo e(old('password')); ?>">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="bg-danger text-white mt-2 d-block rounded pl-2 pt-1 pb-1"> <?php echo e($message); ?>  </span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     </div>
                     <button type="submit" name="signin" class="btn btn-primary d-block login-btn">Login</button>
                     <?php if(Session::has('success')): ?>
                         <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                     <?php endif; ?>
                     <?php if(Session::has('fail')): ?>
                         <div class="alert alert-danger mt-3"><?php echo e(Session::get('fail')); ?></div>
                     <?php endif; ?>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </body>
</html><?php /**PATH /opt/lampp/htdocs/mlm/resources/views/admin/login.blade.php ENDPATH**/ ?>