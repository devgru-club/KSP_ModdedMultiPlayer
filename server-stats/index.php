<?php $data = json_decode(file_get_contents("http://ksp.devgru.club:8080/%22"),true); ?>
<b> Server Name:</b><?= $data["server_name"]; ?><br>
<b> Game Mode:</b><?= $data["game_mode"]; ?><br>
<b> Player Count:</b><?= $data["player_count"]; ?><br>
<b> Online Players:</b><?= $data["players"]; ?><br>
<b> Warp Mode:</b><?= $data["warp_mode"]; ?><br>
