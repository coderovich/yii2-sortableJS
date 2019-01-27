SortableJS for Yii 2
=========================

This is an [Yii framework 2.0](http://www.yiiframework.com) to create reorderable drag-and-drop lists for modern browsers and touch devices.

**Forked from https://github.com/yii-ui/yii2-rubaxa-sortable**

**Fixed**:
- Client events
- SortableJS Plugin call 

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
php composer.phar require coderovich/yii2-sortablejs
```

or add

```
"coderovich/yii2-sortablejs": "~1.0.0"
```

to the require section of your `composer.json` file.

Usage
-----

```php
use coderovich\sortablejs\Sortable;

echo Sortable::widget([
    'items' => [
        'Item 1',
        ['content' => 'Item2'],
        [
            'content' => 'Item3',
            'options' => ['class' => 'text-danger'],
        ],
    ],
    'containerOptions' => ['class' => 'list-group'],
    'itemOptions' => ['class' => 'list-group-item'],
    'clientOptions' => ['animation' => 0],
]);
```
Documentation
------------

[Documentation] at https://github.com/SortableJS/Sortable.

License
-------

**coderovich/yii2-sortableJS** is released under the BSD 3-Clause License. See the [LICENSE.md](LICENSE.md) for details.
