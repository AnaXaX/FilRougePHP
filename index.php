<?php
$page = 1;
require_once 'header.php';
?>
<div class="container ">
    <div class="jumbotron MinOpacity <?php if (isset($_GET['reussi']))
    echo'animated bounce';
if (isset($_GET['error']))
    echo'animated shake';
?>"><center>
        <h1><b> BIENVENUE AU ZOO PARK </b></h1>
        <p><i> Plongez au coeur du monde animal</i></p>
        <p><a class="btn btn-primary btn-large">En savoir plus </a></p>
        </center>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default MinOpacity" id="headings">
                <div class="panel-heading">Actualités</div>
                <div class="panel-body">
                    <h3>La Plaine Africaine s'est refait une beauté!</h3>
                    <h3>Zoo Park de demain : Votre avis compte </h3>
                    <h3>Venez découvrir le nouveau spectacle aquatique!</h3>

                </div>
            </div>
            <div class="panel panel-default MinOpacity" id="tables">
                <div class="panel-heading">LIVRE D'OR
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Prénom</th>
                                <th>Commentaire </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Michael</td>
                                <td>Super Zoo pour une journée en famille </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Lucille</td>
                                <td>Le spectacle est génial !</td>
                            </tr>
                            <tr class="success">
                                <td>3</td>
                                <td>Marion</td>
                                <td> Une belle découverte que ce Parc</td>
                            </tr>
                            <tr class="danger">
                                <td>4</td>
                                <td>Hugo</td>
                                <td> Monkey Island nous plonge vraiment hors du temps</td>
                            </tr>
                            <tr class="warning">
                                <td>5</td>
                                <td>Pierre</td>
                                <td>Super cadre pour notre sortie scolaire, les enfants étaient ravis</td>
                            </tr>
                            <tr class="active">
                                <td>6</td>
                                <td>Tanguy</td>
                                <td> Je reviendrais</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default MinOpacity">
                <div class="panel-heading ">À Propos de Nous
                </div>
                <div class="panel-body">
                    <p class="lead">L'histoire du Zoo Park </p>
                    <p> Le Parc Zoologique <i>"Zoo Park"</i> est la réalisation d’un rêve d’enfant : la passion du monde animal, Anas Boudyach la reçut comme un coup de foudre à l’âge de 4 ans en visitant la ménagerie d’un grand cirque français. Enfant, adolescent, puis étudiant, Michel passait tous ses temps libres dans les zoos, bien décidé à monter le sien, un jour. L’idée du “Zoo Park" remonte à 1978. Il faut dire que le projet ne rencontra, au départ, que scepticisme et hostilité : personne n’y croyait hormis le docteur Mehdi Louafdi qui fut le seul bouclier de Anas Boudyach et Amine Nejjar, ces deux jeunes fous qui osaient aller à contre-courant ! Mais la détermination de Anas et Amine vint à bout de toutes les difficultés, et le 28 juin 1986 le Parc Zoologique <b> "Zoo Park" </b> ouvrait ses portes. Depuis lors, une politique offensive en matière de communication et d’investissements a permis de construire des installations nouvelles, de plus en plus audacieuses. En 2018, le zoo s’étend sur 18 hectares, compte <b> 2000 </b> animaux originaires des cinq continents et appartenant à <b>360</b> espèces différentes. Il emploie de 130 à 220 salariés suivant la saison, et le nombre annuel de visiteurs dépasse les <b>600 000</b></p>

                    <p class="text-muted"> <i><b> La Plaine Africaine </b></i></p>
                    <p class="text-warning"> <b><i> Aqualand </i></b></p>
                    <p class="text-danger"> <b><i> Le Vivarium </i></b> </p>
                    <p class="text-info"> <i><b> Le Coin des Félins </b></i></p>
                    <p class="text-success"> <i><b> Monkey Island </b></i> </p>

                </div>
            </div>


        </div>
    </div>  
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default MinOpacity" id="content-formatting">
                <div class="panel-heading ">Do you know da way</div>
                <div class="panel-body">

                    <h2> Comment Venir au Zoo Park <small>Tous les chemins mènent au Zoo Park</small></h2>
                    <hr>             
                    <div class="row">
                        <div class="col-xs-6">
                            <ul>
                                <li>VOITURE</li>
                                <li> Proche quartier Part-Dieu via Périphérique Nord, à côté de l'autoroute A6</li>

                                <li>TRAIN : Gare Part-Dieu Vivier Merle</li>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <ol>
                                <li> TRANSPORT EN COMMUN</li>
                                <li>Metro B : Gare Part-Dieu
                                    <ol>
                                        <li>Bus C2 Arrêt Zoo Park</li>
                                    </ol>
                                </li>
                                <li> Tram T1 Arrêt Le Tonkin</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
<?php
require_once 'footer.php';
?>
