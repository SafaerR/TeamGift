<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources\css\app.css">

    <title>Authentification</title>
</head>
<body>
    <img style="display:block;margin-left:auto;margin-right:auto;width:20%;" src='logo2.jpg' />
    <h1 class="text-center" style="font-size:7em;font-family:Arial;color:rgb(79, 156, 146);">TeamGift</h1>
    <form class="form-group text-center" action="<?php echo e(route('connection')); ?>" method="post" style="" Projet_XML_V>
        <?php echo e(csrf_field()); ?>

        <div class="field">
            <label for="email" class="text-center"
                style="font-size:2em;font-family:Arial;color:rgb(79, 156, 146);">Courriel</label>
            <div class="control">
                <input class="text-center mb-2 " id="email" type="email" name="email" value=<?php echo e(old('email')); ?>>
                <?php if($errors->has('email')): ?>
                    <p class="help is-dark"><?php echo e($errors->first('email')); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="field">
            <label class="label text-center" style="font-size:2em;font-family:Arial;color:rgb(79, 156, 146);">Mot de passe</label>
            <div class="control">
                <input class="input text-center" type="password" placeholder="Password" name="password">
                <?php if($errors->has('password')): ?>
                    <p class="help is-danger"><?php echo e($errors->first('password')); ?></p>
                <?php endif; ?>
            </div>
            <br>
        </div>
        <div class="control">
            <button class="btn btn-dark" type="submit">Se connecter</button>
        </div> <br>
        <?php if(session()->has('message')): ?>
            <h4 style="background-color:red; color: white; text-align:center;">
                <?php echo e(session()->get('message')); ?></h4>
        <?php endif; ?>
    </form>
    <form action="<?php echo e(route('inscription')); ?>" method="get">
        <div class="control text-center">
            <button class="btn btn-dark text-center" type="submit">S'inscrire</button>
        </div>
    </form>
    </div>

</body>

</html>
<?php /**PATH C:\Users\samou\Desktop\TeamGift6\resources\views/connexion/login.blade.php ENDPATH**/ ?>