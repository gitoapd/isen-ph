<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<center>



<form id="home" method="post" action=<?php echo '"'; echo base_url(); echo 'projet/projection"'?>" enctype="multipart/form-data">
  <div class="form-group">
    <label>Selectionner un fichier</label>
    <input type="file"  name="file">
  </div>
  <button type="submit" class="btn btn-dark">Lancer la projection</button>
</form>
</center>