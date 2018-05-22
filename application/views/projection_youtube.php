<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
     <?php
    function resol()
    {
    $resol='<script type="text/javascript">
                    document.write(""+screen.width+"*"+screen.height+"");
    </script>';
    return $resol;
    }

    $var_resol = resol();
    //var_dump($var_resol);

    //$var_resol2 = strrchr($var_resol, '*');
    $var_resol2 = substr(strrchr( $var_resol, '*')  ,1);

    //echo $var_resol2;

    $var_resol = 400;

    ?>

<button id="btnLecture" class="btn btn-info" onclick="lecture()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>

<div id="conteneur">
    <div class="ligne1"></div>
    <div class="ligne1"><iframe id="v1" width="100%" height="100%" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="ligne1"></div>
</div>
<div id="conteneur" style="height:<?php echo $var_resol?>px;">
    <div class="ligne2"><iframe id="v2" width="100%" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="ligne2"></div>
    <div class="ligne2"><iframe id="v3" width="100%" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
</div>
<div id="conteneur">
    <div class="ligne3"></div>
    <div class="ligne3"><iframe id="v4" width="100%" src=<?php echo '"https://www.youtube.com/embed/'.$url_youtube.'?controls=0"';?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="ligne3"></div>
</div>