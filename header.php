<?php 

ob_start();//session_start work
include('php/hostix.php'); ?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Gestion de parc animalier">
        <meta name="author" content="Les 5 nains">
        <!-- <link rel="icon" href="img/favicon.ico"> -->

        <title>ZooPark</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="js/vegas/vegas.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    </head>

    <body id="body">

        <nav class="navbar navbar-inverse " role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">ZooPark</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if($page==1) echo 'class="active"'?>><a href="index.php">Accueil</a></li>
                        <li class="Rubrique">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos Activités <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Activités</a></li>
                                <li><a href="#">Offres</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><?php //if (isset($_SESSION)) {var_dump($_SESSION);}  ?>A propos de nous</a></li>
                    </ul>

                    <ul id ="nom" class="nav navbar-nav navbar-right">

                        <li>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                echo '<div class="navbar-btn"><a data-toggle="modal" href="#connexion" class="btn btn-default" id="buttonConnexion">Connexion</a></div>';
                            } else {
                                echo '<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bonjour ' . $_SESSION['nomClient'] . ' ' . $_SESSION['prenomClient'] . ' <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li ><a href="formModifInfoClient.php">Modifier mes données personnelles</a></li>
                            <li><a href="#">Consulter mon panier</a></li>
                            <li><a href="php/connexion.php?stateCo=lhayat">Se déconnecter</a></li>
                        </ul>
                    </li>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- END NAV BAR -->

        <!-- Modal connexion -->
        <div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">



                <div class="col-md-9 col-md-offset-2">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">

                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="php/connexion.php?log=in" method="post" role="form" style="display: block;">
                                        <div class="form-group">
                                            <label for="username">Email <?php echo realpath(dirname(__FILE__)); ?></label>
                                            <input type="text" name="email-connexion" id="email-connexion" tabindex="1" class="form-control" placeholder="Email" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password-connexion" id="password-connexion" tabindex="2" class="form-control" placeholder="Mot de passe">
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                            <label for="remember"> Remember me  I have no friends :'( </label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Se connecter">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="register-form" action="php/submit.php" method="post" role="form" style="display: none;">
                                        <div class="form-group">
                                            <label for="email">Nom</label>
                                            <input type="text" name="name-register" id="nom" tabindex="1" class="form-control" placeholder="Nom" value="">
                                        </div>                                            <div class="form-group">
                                            <label for="email">Prénom</label>
                                            <input type="text" name="pname-register" id="prenom" tabindex="1" class="form-control" placeholder="Prénom" value="">
                                        </div>                                            <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email-register" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Mot de passe</label>
                                            <input type="password" name="password-register" id="password-register" tabindex="2" class="form-control" placeholder="Mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm-password">Confirmez le mot de passe</label>
                                            <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmer le mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </body>
</html>