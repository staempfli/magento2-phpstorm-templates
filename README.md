# Magento 2 PHPStorm Preferences

This project is intended to setup useful PHPStorm configuration for Magento 2 Projects.

## Disclaimer

This only overrides the file template "PHP Class.php" to add a specific header comment. 
We need to edit this file instead of creating a new one because automatic Namespace only works on this specific template.
All the other templates are custom ones with a naming prefix "2m" in order to make them unique.

## Installation

**IMPORTANT:** Before you do this, make sure PhpStorm is not running, or it will overwrite the changed files before shutting down.

1.- Clone this repo.

```
$ git clone https://github.com/staempfli/m2-phpstorm.git
```

2.- Private configuration

```
$ cp Preferences/fileTemplates/includes/stmpfl_variables.txt.dist Preferences/fileTemplates/includes/stmpfl_variables.txt
$ vim Preferences/fileTemplates/includes/stmpfl_variables.txt
```

3.- Create Symlinks to new templates. Go into this project `$ cd m2-phpstorm` and execute the following: 

```
$ cd Preferences
$ find * -type f | xargs -I{} ln -sf $(pwd)/{} $(find ~ -type f -name "idea.properties" -exec dirname {} +)/{}
```

## Preferences

* [File Templates](docs/fileTemplates.md)
* [Live Templates](docs/liveTemplates.md)

## Usage

All file and live templates namings start with "2m" except "PHP Class.php". 
For PHP classes template we need to use the default one because automatic Namespace only works on this specific template.

## Contribute

### Live templates:

0. Add new live templates on PHPStorm within the ***StmpflMagento2*** group.
0. Commit and push

### File Template:

0. Create new File template on PHPStorm
0. Copy this template from your local PHPStorm preferences into this project `Preferences/fileTemplates`
0. Commit and push


### Update Live templates Documentation

`cd m2-phpstorm/Preferences/templates && echo 'cat //templateSet/template/@name' | xmllint --shell "StmpflMagento2.xml"`
