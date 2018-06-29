<?php
//namespaces + inheritance + abstraction + autoloading
require 'Helper/autoload.php';



$auto = new Autoloader('company.php');
require($auto->path);





$auto = new Autoloader('employees.php');
require($auto->path);


$newEmp = new Karigar\App\Employees();
$newEmp->CompanyName();




  ?>
