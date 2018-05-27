<?php

/*

config.php

Mooxxie configuration file.
Here, you will find global options that you can't change throw the online administration page.
Keep in mind that all of the options that are listed in this file will be configured by the web-installer at firts launch.

Please be careful, as modifying some options could corrupt your installation. The second part of this file shouldn't be changed manually !

*/

//PART 1

//Please, replace this with the name of your project (or use the webinterface to change it)
$mooxxie_project_name = "Your Project";

//Please, replace this with the default language of Mooxxie (or use the webinterface to change it)
$mooxxie_default_language = "fr_FR";

//Please, replace this with the URL of the installation
$mooxxie_installation_url = "https://localhost/";

//Please, enable this if you want to show debugging informations
$mooxxie_debug_mode = false;

//PART 2 : DO NOT MODIFY THIS VALUES MANUALLY !

//Is this the first launch of Mooxxie (cause web installer to start)
$mooxxie_first_launch = true;

//The current version of the Mooxxie software
$mooxxie_version = "0.0.1";

?>