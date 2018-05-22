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
<div id="conteneur">
    <div class="ligne1"></div>
    <div class="ligne1">
    <video loop autoplay id="" width="100%">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/webm">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/ogg">
	</video>
	</div>
    <div class="ligne1"></div>
</div>
<div id="conteneur">
    <div class="ligne2">
    <video loop autoplay id="v2" width="100%">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/webm">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/ogg">
	</video></div>
    <div class="ligne2"></div>
    <div class="ligne2">
    <video loop autoplay id="v3" width="100%">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/webm">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/ogg">
	</video></div>
</div>
<div id="conteneur">
    <div class="ligne3"></div>
    <div class="ligne3">
    <video loop autoplay id="v4" width="100%">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/webm">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/ogg">
	</video></div>
    <div class="ligne3"></div>
</div>