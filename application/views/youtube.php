<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--Pour les vidéos youtube -->
<div id="home">
  <form id="home" method="post" action=<?php echo '"'; echo base_url(); echo 'projet/youtube"'?>" enctype="multipart/form-data">
    <div class="form-group">
      <label for="">Url de la vidéo Youtube</label>
      <input type="text" class="form-control" name="url_youtube"  placeholder="Entrez votre Url Youtube">
    </div>
    <button type="submit" class="btn btn-info">Valider <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
  </form>
</div>