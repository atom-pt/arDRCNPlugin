# arDRCNPlugin
__Customized theme for DRCN AtoM site based on arDominionPlugin__

This theme was created for Access to Memory version 2.6.4. It is not granted to work on previous ou future versions.

## Install instructions

To install this theme on a AtoM v2.6.4 instalation you must:

## 1. Copy arDRCNPlugin folder into your AtoM plugins folder

Copy the contents to a arDRCNPlugin folder in the plugins folder inside of atom installation folder;

By default the atom installation folder = _/usr/share/nginx/atom/_

_Download load it from github repository into the AtoM plugins folders._
```
cd /usr/share/nginx/atom/plugins
sudo git clone --depth 1 -b drcn264theme https://github.com/atom-pt/arDRCNPlugin.git
```
* __Create css files from less files__

_Note: everytime you change or edit the less files in arDRCNPlugin/css/less, you must repeat the following command to recreate de css files._

```
sudo make -C /usr/share/nginx/atom/plugins/arDRCNPlugin
```
* __Make all files inside arDRCNPlugin accessible to www-data user__
```
sudo chown -R www-data:www-data arDRCNPlugin
```
* __Reload the php files and clean the memory cache__

_Note: everytime you change or edit the php files in arDRCNPlugin, you must repeat the following command to reload and clean the php files cache._

```
sudo service php7.2-fpm restart && sudo systemctl restart memcached
```

## 2. Select arDRCNPlugin theme into your AtoM Admin themes settings:

http://atom/index.php/sfPluginAdminPlugin/themes

And sellect the arDRCNPlugin ooption and press "Save" button
