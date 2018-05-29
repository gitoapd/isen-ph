<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="conteneur_v">
    <div class="ligne1_v"></div>
    <div class="ligne1_v">
    <video loop autoplay id="" width="100%">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/webm">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/ogg">
	</video>
	</div>
    <div class="ligne1_v"></div>
</div>
<div id="conteneur_v" style="height:400px">
    <div class="ligne2_v">
    <video loop autoplay id="v2" width="100%">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/webm">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/ogg">
	</video></div>
    <div class="ligne2_v" style="width:250px"></div>
    <div class="ligne2_v">
    <video loop autoplay id="v3" width="100%">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/webm">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/ogg">
	</video></div>
</div>
<div id="conteneur_v">
    <div class="ligne3_v"></div>
    <div class="ligne3_v">
    <video loop autoplay id="v4" width="100%">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/mp4">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/webm">
		<source src=<?php echo base_url(); echo "/assets/media/".$filename?> type="video/ogg">
	</video></div>
    <div class="ligne3_v"></div>
</div>