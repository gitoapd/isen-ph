<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--Pour les vidéos sans stream -->
<video autoplay id="video_haut" width="30%">
	<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
</video>
<video autoplay id="video_gauche" width="30%">
	<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
</video>
<video autoplay id="video_bas" width="30%">
	<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
</video>
<video autoplay id="video_droite" width="30%">
	<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
</video>
