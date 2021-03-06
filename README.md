![alt text](https://raw.githubusercontent.com/ahmedjamaltariq/PHPMagicLoader/master/PHPMagicLoader_github.png)
# PHPMagicLoader
Best and rapid Autoloader class for PHP which finds the libraries in whole project root directory and loads them in a very fast and efficient manner.
This class is developed by **Ahmed Jamal Tariq, CTO at Divstack Technologies, Pakistan**

# Advantages :
1) You don't have to remember the exact path of library *(where ever it is in project folder)* for loading it.
2) You don't to replace the backward slashes with forward slashes in the path string.

# How to install :
Just download and extract the **PHPMagicLoader.zip** file in your project folder.

# How to use :
1) Require it in your main file, typically *index.php* file. The inclusion of **PHPMagicLoader** class isn't counted as lines of code to this magic facility.

```php
require('PHPMagicLoader\MagicLoad.php');
```

2) Create an instance of it and pass the names of files in paramter with a '|' as a separator. *Note: [Just Copy and Paste below two lines and pass the names of your files accordingly]*

```php
$libraries = new MagicLoad('employees.php|company.php');
foreach ($libraries->paths as $library) { require($library);}
```
