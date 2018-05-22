<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php /*
<!--Pour les vidéos youtube -->
 <table width="100%">
  <tr >
    <td width="33%">a</td>
    <td>a</td>
    <td>a</td>
  </tr>
  <tr>
    <td>a</td>
    <td ><video autoplay id="" width="33%">
<source src=<?php echo base_url(); echo "/assets/media/video.mp4"?> type="video/mp4"></video></td>
    <td>a</td>
  </tr>
  <tr>
    <td width="33%">a</td>
    <td>a</td>
    <td>a</td>
  </tr>
</table>

<div id="conteneur">

    <div class="element"></div>

    <div class="element">Elément 2</div>

    <div class="element">Elément 3</div>

</div>

/*
<video autoplay id="" width="100%">
<source src=<?php echo base_url(); echo "/assets/media/video.mp4"?> type="video/mp4"></video>
*/
?>
<h1>Pause / Play Buttons for YouTube Videos</h1>

<!-- Make sure ?enablejsapi=1 is on URL -->
<button id="play-video" href="#">Play Video</button>

<iframe id="video" src="//www.youtube.com/embed/FKWwdQu6_ok?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>
<br />
<script type="text/javascript">
    $(document).ready(function() {
  $('#play-video').on('click', function(ev) {
 
    $("#video")[0].src += "&autoplay=1";
    ev.preventDefault();
 
  });
});
</script>