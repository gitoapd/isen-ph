<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<button id="btnLecture" class="btn btn-info"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>

<div id="conteneur">
    <div class="ligne1"></div>
    <div class="ligne1"><iframe id="v1" width="100%" height="100%" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="ligne1"></div>
</div>
<div id="conteneur" style="height:400px">
    <div class="ligne2"><iframe id="v2" width="100%" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="ligne2"></div>
    <div class="ligne2"><iframe id="v3" width="100%" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
</div>
<div id="conteneur">
    <div class="ligne3"></div>
    <div class="ligne3"><iframe id="v4" width="100%" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="ligne3"></div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
  $('#btnLecture').on('click', function(ev) {
 
    $("#v1")[0].src += "&autoplay=1";
    $("#v2")[0].src += "&autoplay=1";
    $("#v3")[0].src += "&autoplay=1";
    $("#v4")[0].src += "&autoplay=1";
    ev.preventDefault();
 
  });
});
</script>