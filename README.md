# Magento 2 PHPStorm Preferences

This project is intent to setup useful PHPStorm configuration for Magento 2 Projects.

## Installation

**IMPORTANT:** Beware that this preferences overwrite the personal PHPStorm Preferences on your computer with the ones defined in this project


0. Create Backup from your current configuration, so you can recover it later on.
```
$ find ~ -type f -name "idea.properties" -exec dirname {} + | xargs -I{} rsync -a {}/ {}/../PhpStormBackup
```

0. Remove current preferences and create Symlinks to custom one. Go into this repo `$ cd m2-phpstorm` and execute the following: 
```
$ cd Preferences
$ find * -maxdepth 0 | xargs -I{} rm -rf $(find ~ -type f -name "idea.properties" ! -path "*/PhpStormBackup/*" -exec dirname {} +)/{}
$ find * -maxdepth 0 | xargs -I{} ln -s $(pwd)/{} $(find ~ -type f -name "idea.properties" ! -path "*/PhpStormBackup/*" -exec dirname {} +)
```

0. Private configuration
```
$ cp Preferences/fileTemplates/includes/stmpfl_variables.txt.dist Preferences/fileTemplates/includes/stmpfl_variables.txt
$ vim Preferences/fileTemplates/includes/stmpfl_variables.txt
```

## Preferences

* [File Templates](docs/fileTemplates.md)
* [Live Templates](docs/liveTemplates.md)

## Usage

All file and live templates namings start with "2M" 
