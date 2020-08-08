<?php

echo <<<EOF
{
  "matchid": "example_match",
  "num_maps": 1,
  "players_per_team": 2,
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
    "name": "EnvyUs",
    "tag": "EnvyUs",
    "flag": "FR",
    "logo": "nv",
    "players": {
      "STEAM_0:0:60640641": "george",
      "STEAM_0:0:22622516": "netinho"
    }
  },
  "team2": {
    "name": "Fnatic",
    "tag": "Fnatic",
    "flag": "SE",
    "logo": "fntc",
    "players": {
      "STEAM_0:0:181588761": "do_mato",
      "STEAM_0:0:8014599": "SpiderManBR"
    }
  },
  "cvars": {
    "hostname": "Match server #1"
  }
}
EOF;
?>
