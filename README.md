AdminSHARDS Asset Bundle
===========
AdminSHARDS Asset Bundle for Backend Theme in Yii2 Framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist shandyrov/yii2-shards-asset "*"
```

or add

```
"shandyrov/yii2-shards-asset": "*"
```

to the require section of your `composer.json` file.


## Documentation
Visit the [online documentation](https://designrevision.com/docs/shards-dashboard-lite) for the most
updated guide.

## Quick Start
Once the extension is installed, you can have a preview by reconfiguring the path mappings of the view component:

For Yii 2 Advanced Application Template or Basic Application Template

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/shandyrov/yii2-shards-asset/src/examples/views'
             ],
         ],
    ],
],
```
This extension contains sample files for layout and viewing, they are not intended to be edited in the vendor / folder.

Therefore, it is recommended that you copy the views into your application and customize them according to your needs.

## Customization
Copy files from vendor /shandyrov/yii2-shards-asset/src/examples/views/yii2 to @app/views.

Edit your views.
