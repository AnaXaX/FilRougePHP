<?php
require_once 'header.php';
require_once 'php/Helper.php';
?>       
<div class="container ">
    
    <div class="panel panel-default <?php if(isset($_GET['reussi']))echo'animated bounce'; if(isset($_GET['error']))echo'animated shake'; ?>" id="forms">
        
        <div class="panel-body">
            <form>
          <fieldset>
            <legend>Formulaire de Contact </legend>
            <div class="form-group">
              <label for="exampleInputEmail">Email </label>
              <input type="text" class="form-control" id="exampleInputEmail" placeholder="Entrez votre adresse email">
            </div>
            <div class="form-group">
              <label for="exampleInputNomPrénom">Nom, Prénom </label>
              <input type="text" class="form-control" id="exampleInputNomPrénom" placeholder="Nom & Prénom">
            </div>
            <div class="form-group">
                <label for="exampleInputObjet"> Objet </label>
                <input type="text" class="form-control" id="exampleInputObet" placeholder="Objet">
            </div>
            <div class="form-group">
                <label for="exampleInputVotreMessage"> Votre Message</label>
            
                <textarea type="text" class="form-control" rows="8" cols="180"> 
</textarea>
                
            </div>
            
          <center>
              <button type="submit" class="btn btn-default">Envoyer</button>
              <button type="reset" class="btn btn-primary">Rénitialiser</button>
              </center>
          </fieldset>
        </form>

    </div>
        
</div>

<div class="jumbotron ">
        <legend>Accès au zoo</legend>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19049.439235043643!2d-6.338849600405147!3d53.35793516443767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c4b4afd1245%3A0x8aa7e3087b6a1b88!2sDublin+Zoo!5e0!3m2!1sfr!2sfr!4v1520948380355" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        
    </div>

<?php
require_once 'footer.php';
?>