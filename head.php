<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <title><?= $_title  ?></title>
        <meta name="description" content = "<?= $_description ?>" >
        <meta property="og:title" content="<?=$_ogTitle?>" />
        <meta property="og:image" content="$_ogImg" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href = 'favicon.ico'>
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
                <div class="header">
                    <div class="btn__humberger">
                        <div class="humberger-1 humberger"></div>
                        <div class="humberger-2 humberger"></div>
                        <div class="humberger-3 humberger"></div> 
                    </div>
                    <div class="logo">
                        <img src="logo.jpg" alt="logo" class="icon">
                    </div>
                    <div class="title__head">
                        <a href="index.php"><img src="logo-name-large.JPG" alt="nom du logo camer infos club"></a>
                        <!-- <a href="index.html"><span class="green">CAMER</span><span class="red">INFOS</span><span class="yellow">CLUB</span></a>  -->
                    </div>
                    <div class="main__header">
                        <div class="sign__in user__account"><a href="#">S'abonner</a></div>
                        <div class="user user__account"><a href="#"> <i class="fa fa-user-circle-o" aria-hidden="true"></i><span class="user">Mon compte</span></a></div>
                    </div>
                </div>
                <nav class="navbar">
                    <ul>
                        <li class="boder__top"><a href="index.php">ACTUALIT??S</a></li>
                        <li class="boder__lef"><a href="accuil-sport.php">SPORTS</a></li>
                        <li class="boder__left"><a href="accuei-politique.php">GEOPOLITIQUE</a></li>
                        <li class="boder__left"><a href="#">CULTURE</a></li>
                        <li class="boder__left"><a href="#">SANTE</a></li>
                        <li class="boder__left"><a href="#">FINANCE</a></li>
                        <li class="boder__left"><a href="#">JOBS OFFER</a></li>
                    </ul>   
                </nav>
                <br>
                <div class="header__flash">
                    <span class="header__title__flash breaking__flash activate">En ce moment</span>
                    <div class="flash breaking__flash">
                        <div class="flash__new actif"><a href="#">Necrologie : le musicien camerounais Ekambi brillant est d??c??d??</a></div>
                        <div class="flash__new"><a href="#">N??crologie : le mokossa de nouveau endeuill??, apr??s EKAMBI Brillant, Djene Djento vient de casser son micro</a></div>
                        <div class="flash__new"><a href="#">Camer info club : le musicien camerounais Nkotti Francois est d??c??d??</a></div>
                    </div>
                    <div class="btn__flash breaking__flash">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <span><a href="#" class="flash__more">Voir plus</a></span>
                </div>
    </header>