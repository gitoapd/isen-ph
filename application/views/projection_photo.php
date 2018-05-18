<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php /*
<script language="javascript" type="text/javascript">

function popitup(url)
{
	var test = '<?php echo base_url(); echo "/assets/media/".$filename?>';
	alert(test);
	newwindow=window.open(url,'anim','fullscreen=yes');
	if (window.focus)
	{
			newwindow.focus()
	}
	newwindow.write("<h1>VLA</h1>");
	return false;
}

</script>

<a href="http://localhost/codeIgniter/projet/animation" onclick="return popitup('http://localhost/codeIgniter/projet/animation')"
	>Link to popup</a>


<form id="home" method="post" action=<?php echo '"'; echo base_url(); echo 'projet/projection"'?>" enctype="multipart/form-data">
	<button type="submit" class="btn btn-dark" onclick="return popitup('http://localhost/codeIgniter/projet/animation')">Lancer l'animation</button>
</form>
<?php echo '"'.$taille.'%'.'"';?>
*/?>

<img id="video_haut" width="30%" src=<?php echo base_url(); echo "/assets/media/".$filename?> alt="Error">
<img id="video_bas" width="30%" src=<?php echo base_url(); echo "/assets/media/".$filename?> alt="Error">
<img id="video_gauche" width="30%" src=<?php echo base_url(); echo "/assets/media/".$filename?> alt="Error">
<img id="video_droite" width="30%" src=<?php echo base_url(); echo "/assets/media/".$filename?> alt="Error">
