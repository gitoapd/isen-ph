<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	$url_youtube = substr(strrchr( $url_youtube, '=')  ,1);
?>
<!--Pour les vidéos sans stream -->

<iframe id="video_haut_y" width="400px" height="225px" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<iframe id="video_bas_y" width="400px" height="255px" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<iframe id="video_gauche_y" width="400px" height="225px"  src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<iframe id="video_droite_y" width="400px" height="225px" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<button id="btnLecture" class="btn btn-info" onclick="lecture()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>