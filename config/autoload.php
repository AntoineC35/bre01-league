<?php 

/* MODELS */
require "models/Game.php";
require "models/Media.php";
require "models/Performance.php";
require "models/Player.php";
require "models/Team.php";


/* MANAGERS */
require "managers/AbstractManager.php";
require "managers/MediaManager.php";
require "managers/TeamManager.php";
require "managers/GameManager.php";
require "managers/PlayerManager.php";



/* CONTROLLERS */
require "controllers/AbstractController.php";
require "controllers/PageController.php";


/* SERVICES */
require "services/Router.php";