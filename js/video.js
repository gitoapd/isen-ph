function lecture()
{
    lecteur = document.getElementById("video_haut");
    lecteur2 = document.getElementById("video_bas");
    lecteur3 = document.getElementById("video_gauche");
    lecteur4 = document.getElementById("video_droite");

    lecteur.play();
    lecteur2.play();
    lecteur3.play();
    lecteur4.play();
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