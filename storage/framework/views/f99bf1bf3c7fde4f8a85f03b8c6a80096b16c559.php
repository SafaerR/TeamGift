<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Team Gift</title>
    <style>
        div.scrollmenu {
            background-color: #333;
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }

    </style>
</head>

<body>
    
    <div class="scrollmenu">
        <a href="#home">Accueil</a>
        <a href="#">Creer Evenement</a> 
    </div>

    

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <div >
        <?php echo $__env->yieldContent('participations'); ?>
    </div>
    
</body>

</html><?php /**PATH C:\Users\safyo\Desktop\Projet_PHP_Laravel\Projet_TeamGift\TeamGift5\resources\views/layouts/principal.blade.php ENDPATH**/ ?>