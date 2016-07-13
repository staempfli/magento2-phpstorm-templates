# Magento 2 PHPStorm Preferences

This project is intended to setup useful PHPStorm configuration for Magento 2 Projects.

## Installation

**IMPORTANT:** Beware that the following steps overwrite the personal PHPStorm Preferences on your computer with the ones defined in this project

1.- Clone this repo.

```
$ git clone https://github.com/staempfli/m2-phpstorm.git
```

2.- Create Backup of your current PHPStorm configuration, so you can recover it if needed.

```
$ find ~ -type f -name "idea.properties" -exec dirname {} + | xargs -I{} rsync -a {}/ {}/../PhpStormBackup
```

3.- Remove current preferences and create Symlinks to custom one. Go into this repo `$ cd m2-phpstorm` and execute the following: 

```
$ cd Preferences
$ find * -maxdepth 0 | xargs -I{} rm -rf $(find ~ -type f -name "idea.properties" ! -path "*/PhpStormBackup/*" -exec dirname {} +)/{}
$ find * -maxdepth 0 | xargs -I{} ln -s $(pwd)/{} $(find ~ -type f -name "idea.properties" ! -path "*/PhpStormBackup/*" -exec dirname {} +)
```

4.- Private configuration

```
$ cp Preferences/fileTemplates/includes/stmpfl_variables.txt.dist Preferences/fileTemplates/includes/stmpfl_variables.txt
$ vim Preferences/fileTemplates/includes/stmpfl_variables.txt
```

## Preferences

* [File Templates](docs/fileTemplates.md)
* [Live Templates](docs/liveTemplates.md)

## Usage

All file and live templates namings start with "2M" 
