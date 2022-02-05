
<?php $__env->startSection('content'); ?>
  
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

        <?php $__currentLoopData = $allEvent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php for($i=0;$i<count($tabIdEvent);$i++): ?>
                <?php if($tabIdEvent[$i]==$event->ID): ?>
                    <?php $__currentLoopData = $allUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php if($event->OrganizerID==$user->ID): ?>
                            <tr>
                                <td><?php echo e($event->Title); ?></td>
                                <td><?php echo e($event->DateOfEvent); ?></td>
                                <td><?php echo e($user->FullName); ?> </td>

                                <td><form action="<?php echo e(route('detailEvenement')); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                 <input type="hidden" name="idParticipant" value=<?php echo e($idUserG); ?>>
                                    <input type="hidden"  name="idEvent" value=<?php echo e($event->ID); ?>>  
                                    <input type="hidden" name="organisateur" value=<?php echo e($user->FullName); ?>> 
                                    <input type="hidden" name="idorganisateur" value=<?php echo e($event->OrganizerID); ?>> 
                                    <input type="submit" value="Voir detail ">
                                </form>
                             
                                </form>
 
                                </td>
                               
                            </tr>
                            <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <?php endif; ?>
            
            <?php endfor; ?>
          
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\safyo\Desktop\Projet_PHP_Laravel\Projet_TeamGift\TeamGift\resources\views/listeparticipations.blade.php ENDPATH**/ ?>