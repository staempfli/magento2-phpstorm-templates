# Magento 2 PHPStorm Preferences

This project is intended to setup useful PHPStorm Templates for Magento 2 Projects.

## Disclaimer

This project overrides the default file template `PHP Class.php` to add a specific header comments. 
We need to edit this file instead of creating a new one because automatic Namespace only works on this specific template.
All other templates are custom ones with a naming prefix `2m` in order to make them unique.

## Installation

You can install this project in 2 different ways:

### Using PHPStorm .jar

0. Just download the `.jar` file and import it in your PHPStorm `File -> Import` 

    * `https://github.com/staempfli/magento2-phpstorm-templates/releases/<version>/settings.jar`

0. Set your personal configuration for comments on PHPStorm `Preferences -> Editor -> File and Code Templates -> stmpfl_variables`

    ![Comments settings](docs/img/comments_settings.png)

### Cloning this project

**IMPORTANT:** Before you do this, make sure PhpStorm is not running, or it will overwrite the changed files before shutting down.

1.- Clone this repo.

    ```bash
    git clone https://github.com/staempfli/magento2-phpstorm-templates.git
    ```

2.- Personal Comments configuration

    ```bash
    $ cd magento2-phpstorm-templates
    $ cp Preferences/fileTemplates/includes/stmpfl_variables.txt.dist Preferences/fileTemplates/includes/stmpfl_variables.txt
    $ vim Preferences/fileTemplates/includes/stmpfl_variables.txt
    ```

3.- Set Symlinks to new templates:
 
**OS X**

    ```bash
    $ ln -s $(PWD)/magento2-phpstorm-templates/Preferences/templates/* ~/Library/Preferences/<product name><version number>/templates/
    $ ln -s $(PWD)/magento2-phpstorm-templates/Preferences/fileTemplates/* ~/Library/Preferences/<product name><version number>/fileTemplates/
    ```

**Linux**

    ```bash
    $ ln -s $(PWD)/magento2-phpstorm-templates/Preferences/templates/* ~/.<product name><version number>/config/templates/
    $ ln -s $(PWD)/magento2-phpstorm-templates/Preferences/fileTemplates/* ~/.<product name><version number>/config/fileTemplates/
    ```

**Windows**

As symlinks do not work by default in Windows, it is better to use the `.jar installation.

## Available Templates

* [File Templates](docs/fileTemplates.md)
* [Live Templates](docs/liveTemplates.md)

## Usage

All file and live templates namings start with `2m` except `PHP Class.php`. 
We need to use the default `PHP Class.php` because automatic Namespace only works on this specific template.

## Contribute

### Live templates:

0. Fork this project
0. Add new live templates on PHPStorm within the ***StmpflMagento2*** group.
0. Commit, push and create PR

### File Template:

0. Fork this project
0. Create new File template on PHPStorm
0. Copy this template from your local PHPStorm preferences into this project `Preferences/fileTemplates`
0. Commit, push and create PR

### Update Live templates Documentation

`cd magento2-phpstorm-templates/Preferences/templates && echo 'cat //templateSet/template/@name' | xmllint --shell "StmpflMagento2.xml"`
