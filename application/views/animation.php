<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="home">
	<h3 id="home">Paramètres</h3>
	<form id="home" method="post" action=<?php echo '"'; echo base_url(); echo 'projet/projection"'?> enctype="multipart/form-data">
	  <div class="form-group">
	    <!-- <label for="width">Width</label>
	    <input type="text" class="form-control" name=""  placeholder="Entrez la largeur">
	    <label for="height">Height</label>
	    <input type="text" class="form-control" name="height" placeholder="Entrez la hauteur">
	    <br>-->
	    <label for="taille">Tailles des frames</label>
	    <br>
	    <input type="range" name="taille" value="30" max="50" min="0" step="5">
	    <br>
	    <label for="ecart">Ecartement des frames</label>
	    <br>
	    <input type="range" name="ecart" value="30" max="50" min="0" step="5">
	  </div>
	  <button type="submit" class="btn btn-info">Relançer <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></button></a>
	</form>
</div>