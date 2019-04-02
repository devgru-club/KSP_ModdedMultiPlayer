<?php $data = json_decode(file_get_contents("http://ksp.devgru.club:8080/%22),true); ?>
<?= $data["server_name"]; ?><?= $data["game_mode"]; ?><?= $data["player_count"]; ?><?= $data["players"]; ?><?= $data["warp_mode"]; ?>
