

<?php $__env->startSection('content'); ?>

  <h1>Invitation envoyé par: <?php echo e($organisateur); ?> </h1><br> 

    <h3>Detail Cadeau: </h3>

       <h5>  Titre Cadeau: .<?php echo e($detailGift->Title); ?></h5>

       <h5>Prix: .<?php echo e($detailGift->Price); ?></h5>
    <div>
        <img src="<?php echo e($detailGift->PhotoURL); ?>" style="width:30%"/>
    </div>

    <div>
        <p>Merci de saisir le montant de votre contribution: </p>
            <form action="<?php echo e(route('participationAccepte')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <input type="hidden"  name="organisateur" value=<?php echo e($organisateur); ?>> 
              <input type="hidden" name="idUserG" value=<?php echo e($idUserG); ?>>
                <input type="hidden"  name="idEvent" value=<?php echo e($idEvent); ?>> 
                <label for="contribution">Montant: </label>
                <input type="text" name="contribution" value='0.00'>
                <input type="submit" value="valider">
            </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\safyo\Desktop\Projet_PHP_Laravel\Projet_TeamGift\TeamGift\resources\views/detailEvenement.blade.php ENDPATH**/ ?>