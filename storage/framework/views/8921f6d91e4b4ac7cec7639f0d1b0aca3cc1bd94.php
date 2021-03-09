<?php $__env->startSection('content'); ?>
<div class="container d-flex flex-column align-items-center pt-5">

  <div class="d-flex justify-content-between align-items-center flex-wrap py-5">
      <div>
        <?php if(auth()->guard()->guest()): ?>
          <a href="<?php echo e(Route('login')); ?>"><button class="btn btn-outline-warning">Connexion</button></a>
          <a href="<?php echo e(Route('register')); ?>"><button class="btn btn-success">Inscription</button></a>
        <?php else: ?>
          <a href="<?php echo e(Route('home')); ?>"><button class="btn btn-outline-primary">Mon compte</button></a>
          <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><button class="btn btn-danger">Déconnexion</button></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo e(csrf_field()); ?>

                </form>
        <?php endif; ?>
        <a href="https://github.com/aliisright/TicTacToe"><button class="btn btn-light"><img class="align-baseline" src="<?php echo e(asset('img/github-icon.png')); ?>" width="20px"> Find on GitHub</button></a>
      </div>
  </div>



  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-4">
        <img src="<?php echo e(asset('img/logo.png')); ?>" width="400px">
    </div>
    <div class="col-lg-4 offset-4">
      <a class="link" href="<?php echo e(route('test.index')); ?>"><div class="homepage-box">
        <h1 class="py-3">Tester le jeu</h1>
      </div></a>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>