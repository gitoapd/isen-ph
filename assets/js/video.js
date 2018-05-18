function lecture()
{
    $("#video_haut_y")[0].src += "&autoplay=1";
    $("#video_bas_y")[0].src += "&autoplay=1";
    $("#video_gauche_y")[0].src += "&autoplay=1";
    $("#video_droite_y")[0].src += "&autoplay=1";

}
function pause()
{
    lecteur = document.getElementById("video_haut");
    lecteur2 = document.getElementById("video_bas");
    lecteur3 = document.getElementById("video_gauche");
    lecteur4 = document.getElementById("video_droite");

    lecteur.pause();
    lecteur2.pause();
    lecteur3.pause();
    lecteur4.pause();
}

$(document).ready(function() {
    alert('ok');
  $('#play-video').on('click', function(ev) {
 
    $("#video_haut_y")[0].src += "&autoplay=1";
    ev.preventDefault();
    alert('ok');
  });
});