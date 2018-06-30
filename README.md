# PHPMagicLoader
Best and rapid Autoloader class for PHP which finds the libraries in whole project root directory and loads them in a very fast and efficient manner.
This class is developed by Ahmed Jamal Tariq, CTO at Divstack Technologies, Pakistan

# Advantages :
1) You don't have to remember the exact of your direcotry for loading it in your main file or class.
2) You don't to replace the backward slashes with forward slashes in the path string.

# How to use:
1) Require it in your main file, typically index.php file. The inclusion of PHPMagicLoader class isn't counted as lines of code to this magic facility.

require('PHPMagicMethod\autoload');

2) Create an instance of it and pass the named of file in paramter.

$library = new Autoloader('named of library');

3) At last require it.

require($library->path);
