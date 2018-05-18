<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="home">
  <form id="home" method="post" action=<?php echo '"'; echo base_url(); echo 'projet/video"'?>" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">Utilisateur</label>
      <input type="text" class="form-control" name="user"  placeholder="Entrez votre nom d'utilisateur">
    </div>
    <div class="form-group">
      <label for="psswd">Password</label>
      <input type="password" class="form-control" name="psswd" placeholder="Mot de passe">
    </div>
    <button type="submit" class="btn btn-info">Valider <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
    <?php
  if ($error)
  {
  	echo '<hr><div class="alert alert-info" role="alert"><strong>Identifiants incorrects!</strong> Réessayer.
  	</div>';
  }
  ?>
  </form>
</div>