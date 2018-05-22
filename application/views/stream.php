<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script language="JavaScript">	
	    var output = test("video_haut_stream");
	    document.write(output);

	    var output = test("video_bas_stream");
	    document.write(output);

	    var output = test("video_gauche_stream");
	    document.write(output);

	    var output = test("video_droite_stream");
	    document.write(output);

	    document.Player.ToolbarConfiguration = "play,+snapshot,+fullscreen"
	    // document.Player.UIMode = "MDConfig";
	    // document.Player.MotionConfigURL = "/axis-cgi/operator/param.cgi?ImageSource=0"
	    // document.Player.MotionDataURL = "/axis-cgi/motion/motiondata.cgi";
</script>