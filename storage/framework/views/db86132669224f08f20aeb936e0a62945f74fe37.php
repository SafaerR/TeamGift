
<?php $__env->startSection('content'); ?>

    <h1 >Creation d'un nouvel evenement </h1>
    <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-dark" style="float: right" type ="submit"> Déconnection</button>
    </form>
    <form action="<?php echo e(route('listeMescontributions', Session::get('user1'))); ?> " method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-dark" style="float: right" type ="submit">Mes contributions</button>
      </form>
    <form action="<?php echo e(route('listeEventsRecus', Session::get('user1'))); ?> " method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-dark" style="float: right" type ="submit">Évenements Reçus</button>
      </form>
    <form action="<?php echo e(route('listeMesevenementorganise', Session::get('user'))); ?> " method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-dark" style="float: right" type ="submit">Mes Évenements</button>
    </form>

   
    <form action="<?php echo e(route('CreerEventPart')); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <label class="label">Titre</label><br>
        <input class="input" type="text" name="titreEvent"><br>
        <label class="label">Nom personne qui recoit le cadeau:</label><br>
        <input class="input" type="text" name="nom_recepteur"><br>
        <input class="input" type="hidden" name="idUserG" value=<?php echo e($idUserG); ?>><br>
        <label class="label">Date d'evenement:</label><br>
       <input class="input" type="date" name="dateofEvent" id='datetimepickerDemo'> <br>
    
        <h3>Liste des cadeaux</h3>
        
        <?php $__currentLoopData = $gifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group">
            <div style="border:2px solid #000000;width:400px;margin:4px;">
            <img src="<?php echo e($gift->PhotoURL); ?>" style="width:50px;height:50px;border:2px solid #a0a0a0;margin:4px;" />
            <input class="custom-control-input" type='radio' name="gift" value='<?php echo e($gift->ID); ?>'>
            <label class="custom-control-label" for="gift"> <?php echo e($gift->Title); ?> , Le prix est <?php echo e($gift->Price); ?>

            
            </label>
        </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <h3>liste des participants</h3>
       
        <?php $__currentLoopData = $participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
             
        <div class="form-group">
            <input class="custom-control-input" type='checkbox' name="idParticipant[]" value='<?php echo e($participant->ID); ?>'>
             <label class="custom-control-label"   for="idParticipant"> <?php echo e($participant->FullName); ?>

            </label>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <button class="btn btn-dark" type="submit">Creer Evenement/ Participant</button>
      </form> 
      
     

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\safyo\Desktop\Projet_PHP_Laravel\Projet_TeamGift\Derniere version\VersionNadia\TeamGift6\resources\views/createEvent.blade.php ENDPATH**/ ?>