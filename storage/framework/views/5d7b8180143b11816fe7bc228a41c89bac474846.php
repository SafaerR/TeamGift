
<?php $__env->startSection('content'); ?>

        <h1 class="title" style="text-align:center;">Bienvenue <?php echo e($userG->FullName); ?></h1> 
               
              <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
                <?php echo e(csrf_field()); ?>

                <button class="btn btn-dark" style="float: right" type ="submit"> Déconnection</button>
            </form>
         <br><br><br>
            
        
        
         
 
          
          <div class="">
            <div class="col">
              <div class="">
              
                <div class="card-body">
                  <h5 class="card-title"><a class="btn btn-dark" href="<?php echo e(route('newevement', $userG->ID)); ?> ">Creer un evenement</a></h5>
                  <p class="card-text">Invitez vos amis a participer a un evenement</p>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="card">
            
                <div class="card-body">
                  <h5 class="card-title"><a class="btn btn-dark" href="<?php echo e(route('listeEventsRecus',$userG->ID)); ?> ">Toutes les invitations recus</a></h5>
                  <p class="card-text">Consultez toutes vos invitations que vous avez recus de vos amis</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
          
                <div class="card-body">
                  <h5 class="card-title"> <a class="btn btn-dark" href="<?php echo e(route('listeMescontributions', $userG->ID)); ?> ">Liste de mes contributions</a></h5>
                  <p class="card-text">consultez vos participations bien detaillés avec votre contribution</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
            
              <div class="card-body">
                <h5 class="card-title"> <a class="btn btn-dark" href="<?php echo e(route('listeMesevenementorganise', $userG->ID)); ?> ">Liste de mes evenements organisés</a></h5>
                <p class="card-text">consultez le details vos evenements que vous avez organisés</p>
              </div>
            </div>
          </div>
        </div>



        




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\safyo\Desktop\Projet_PHP_Laravel\Projet_TeamGift\Derniere version\VersionNadia\TeamGift6\resources\views/connexion/profile.blade.php ENDPATH**/ ?>