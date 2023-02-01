
<?php
$ping = file_get_contents("https://api.serveurs-minecraft.com/api.php?Joueurs_En_Ligne_Ping&ip=play.onecube.com&port=25565");
echo'
<h4 class="u-text u-text-default u-text-1" ><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/44386-1c4cf74d.png" alt=""></span>&nbsp;Rejoins <span style="font-style: italic;" class="u-text-custom-color-3">'.$ping.' </span>joueurs 
</h4>';
?>

