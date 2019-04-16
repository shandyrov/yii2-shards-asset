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

Это расширение содержит примеры файлов для макета и просмотра , они не предназначены для  редактирования в папке vendor /.

Поэтому рекомендуется скопировать представления в ваше приложение и настроить их в соответствии с вашими потребностями.
