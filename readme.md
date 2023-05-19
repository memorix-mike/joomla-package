# Picturae Joomla Installer
This package installs Joomla 4, 
sets up a Docker container and manages all build-scripts for Picturae websites.

### Requirements
#### Docker (https://www.docker.com/products/docker-desktop/)

### Installation
1. Create a `.env` file with at least the following information:

```php
PROJECT_NAME=project_name
NODE_VERSION=14
PHP_VERSION=8.1
```

2. `$ composer require picturae-mike/joomla`
3. `$ docker-compose up`

... more settings to add...



## @todo:
- Create a TenantConfig file
- Set-up script for Joomla 4
- Script to check if all plugins are ready to be updates (Joomla plugins)
- Create Global functions to be used inside the project
- 