
<?php $__env->startSection('content'); ?>

        <h1 class="title" style="text-align:center;">Bienvenue <?php echo e($userG->FullName); ?></h1> 
                
              <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
                <?php echo e(csrf_field()); ?>

                <button class="button is-danger is-rounded" style="float: right" type ="submit"> Déconnecter</button>
            </form>
            <a href="<?php echo e(route('newevement', $userG->ID)); ?> ">Creer un evenement</a><br>
          <a href="<?php echo e(route('listeEventsRecus',$userG->ID)); ?> ">Afficher Toutes les invitations recus</a>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\safyo\Desktop\Projet_PHP_Laravel\Projet_TeamGift\TeamGift\resources\views/connexion/profile.blade.php ENDPATH**/ ?>