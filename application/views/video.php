<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="home">
	<form id="home" method="post" action=<?php echo '"'; echo base_url(); echo 'projet/projection"'?>" enctype="multipart/form-data">
	  <div class="form-group">
	    <label>Selectionner un fichier</label>
	    <input type="file"  name="file">
	  </div>
	  <a target="_blank"><button type="submit" class="btn btn-info">Upload <span class="glyphicon glyphicon-upload" aria-hidden="true"></span></button></a>

	</form>
</div>