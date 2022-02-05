
<?php $__env->startSection('content'); ?>

        <h1 class="title" style="text-align:center;">Bienvenue <?php echo e($userG->FullName); ?></h1> 
                
              <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
                <?php echo e(csrf_field()); ?>

                <button class="button is-danger is-rounded" style="float: right" type ="submit"> Déconnecter</button>
            </form>
            <a href="<?php echo e(route('newevement', $userG->ID)); ?> ">Creer un evenement</a><br>
          <a href="<?php echo e(route('listeEventsRecus',$userG->ID)); ?> ">Afficher Toutes les invitations recus</a>



<div>
  <h1>Mes évenements recus</h1><br>      
  <table  class="table table is-bordered" >
      <thead>
          <tr>
        
            <th>Titre évenement</th>
            <th>Date évenement</th>
            <th>Organisateur</th>
            <th>Etat</th>
         
          </tr>
        </thead>

      <?php $__currentLoopData = $allEvent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infoEv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php for($i=0;$i<count($tabIdEvent);$i++): ?>
              <?php if($tabIdEvent[$i]==$infoEv->ID): ?>
                 <tr>
                      <td><?php echo e($infoEv->Title); ?></td>
                      <td><?php echo e($infoEv->DateOfEvent); ?></td>
                      <td><?php echo e($organisateur=app\models\UserG::find($infoEv->OrganizerID)->FullName); ?></td> 
                      <td><form action="<?php echo e(route('detailEvenement')); ?>" method="POST">
                          <?php echo e(csrf_field()); ?>

                       
                       <input type="hidden" name="idUserG" value=<?php echo e($idUserG); ?>>
                        <input type="hidden"  name="idEvent" value=<?php echo e($infoEv->ID); ?>>  
                        <input type="hidden" name="idorganisateur" value=<?php echo e($infoEv->OrganizerID); ?>>  
                        <input type="hidden" name="organisateur" value=<?php echo e($organisateur); ?>> 
                          <input type="submit" value="accepter ">
                      </form><br>
                      </td>
                  </tr>
                  <?php endif; ?>
              
           <?php endfor; ?>   
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\safyo\Desktop\Projet_PHP_Laravel\Projet_TeamGift\TeamGift4\resources\views/connexion/profile.blade.php ENDPATH**/ ?>