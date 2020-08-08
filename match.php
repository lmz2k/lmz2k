<?php

echo <<<EOF
{
  "matchid": "example_match",
  "num_maps": 1,
  "players_per_team": 1,
  "min_players_to_ready": 1,
  "min_spectators_to_ready": 0,
  "skip_veto": false,
  "veto_first": "team1",
  "side_type": "standard",
  "maplist": [
    "de_cache",
    "de_dust2",
    "de_inferno",
    "de_mirage",
    "de_nuke",
    "de_overpass",
    "de_train"
  ],
  "favored_percentage_team1": 65,
  "favored_percentage_text": "HLTV Bets",
  "team1": {
    "name": "Teste2",
    "tag": "CORNO",
    "flag": "FR",
    "logo": "nv",
    "players": {
      "STEAM_0:0:60640641": "george",
      "STEAM_0:1:104173761" : "praxedes",
			"STEAM_0:0:8014599" : "SpiderManBR"
    }
  },
  "team2": {
    "name": "Teste1",
    "tag": "KORN",
    "flag": "SE",
    "logo": "fntc",
    "players": {
      "STEAM_0:0:52631481": "gLima",
      "STEAM_0:1:25098971" "dudu"
      
    }
  },
  "cvars": {
    "hostname": "FUNCIONOU KRAI #1"
  }
}
EOF;
?>
