<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.css" integrity="sha512-7VGuxKU1BFMmA+dC7NiW8jF0YOIe6bibjUBr42unVtEsI/UYzXMS3nkgNvmsY4yqauxeiEs4bXF6fPLsCuxN/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Authentification</title>
</head>
<body>
    <div style="width: 75%; margin-left:20%; border-radius:20px ; margin-top:10%;">
    <form action="<?php echo e(route('connection')); ?>" method="post" style="">
        <?php echo e(csrf_field()); ?>


        <div class="field">
            <label class="label">Addresse Email</label>
            <div class="control">
              <input class="input" type="text" placeholder="Text input" name="email" value=<?php echo e(old('email')); ?>> 
              <?php if($errors->has('email')): ?>
              <p class="help is-danger" ><?php echo e($errors->first('email')); ?></p>
           <?php endif; ?>
            </div>
          </div>

        <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control">
              <input class="input" type="password" placeholder="Text input" name="password">
            <?php if($errors->has('password')): ?>
              <p class="help is-danger" ><?php echo e($errors->first('password')); ?></p>
           <?php endif; ?>
            </div>
        </div>
            <div class="control">
              <button class="button is-primary" type="submit">Se connecter</button>
            </div>  <br>
            <?php if(session()->has('message')): ?>
            <h4 style="background-color:red; color: white; text-align:center;">
             <?php echo e(session()->get('message')); ?></h4>
            <?php endif; ?>   
      </form><br>
      
  

      <form action="<?php echo e(route('inscription')); ?>" method="get">
        <div class="control">
            <button class="button is-primary" type="submit">S'inscrire</button>
          </div>
      </form> 
    </div>
</body>
</html><?php /**PATH C:\Users\safyo\Desktop\Projet_PHP_Laravel\Projet_TeamGift\TeamGift4\resources\views/connexion/login.blade.php ENDPATH**/ ?>