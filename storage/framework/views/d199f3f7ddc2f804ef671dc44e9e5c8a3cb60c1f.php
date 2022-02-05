
<?php $__env->startSection('content'); ?>
  
<h1>Mes Evenements organisés</h1><br>      
    <table  class="table table is-bordered" >
        <thead>
            <tr>
          
              <th>Titre évenement</th>
              <th>Date évenement</th>
              <th>Gift</th>
              <th>Prix</th>
              <th>Photo cadeau</th>

           
            </tr>
          </thead>

    
        <?php $__currentLoopData = $mesevenementsorganises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>    
               <td><?php echo e($event->Title); ?></td> 
               <td><?php echo e($event->DateOfEvent); ?></td> 
                <td><?php echo e($gift=App\models\Gift::find($event->GiftID)->Title); ?></td> 
               <td><?php echo e($giftprice=App\models\Gift::find($event->GiftID)->Price); ?></td>       
               <td><img src= <?php echo e($giftimage=App\models\Gift::find($event->GiftID)->PhotoURL); ?> style="width:20%"/></td>              
         </tr> 
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        
    </table> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\safyo\Desktop\Projet_PHP_Laravel\Projet_TeamGift\TeamGift6\resources\views/listeMesevenementorganise.blade.php ENDPATH**/ ?>