<?php
//first of all extract the PHPMagicLoader.zip in the root directory of your project and then require it in your index.php class
require 'PHPMagicLoader/autoload.php';

//the create its instance and pass the name of file which you want to load and it must be present anywhere in root diretory or its sub direcotries
//As an example it is loading 'company.php' which is present anywhere in root directory

$auto = new Autoloader('company.php');
require($auto->path);


  ?>
