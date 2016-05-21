# yii2-tagsinput

## Install

Via Composer

```bash
$ composer require avikarsha/yii2-tagsinput
```

or add

```
"avikarsha/yii2-tagsinput": "*"
```

to the require section of your `composer.json` file.


## Usage

On your view file.

```php

<?php
use avikarsha\tagsinput\TagsinputWidget;
?>

<?= $form->field($model, 'tags')->widget(TagsinputWidget::classname(), [
    'clientOptions' => [
        'trimValue' => true,
        'allowDuplicates' => false
    ]
]) ?>

<?php echo $form->field($model, 'places')->widget(TagsinputWidget::classname(), [
    'clientOptions' => [
        "itemValue" => 'name',
        "itemText" => 'name',
    ],
   'dataset' => [
        [
            'remote' => [
                'url' => Url::to(['get-countries']). '?q=%QUERY',
                'wildcard' => '%QUERY'
            ],
            'datumTokenizer' => "Bloodhound.tokenizers.obj.whitespace('name')",
            'displayKey' => 'name',
            'limit' => 10,
            'templates' => [
                'header' => '<h3 class="name">Country</h3>'
            ]
        ],
        [
            'remote' => [
                'url' => Url::to(['get-cities']). '?q=%QUERY',
                'wildcard' => '%QUERY'
            ],
            'datumTokenizer' => "Bloodhound.tokenizers.obj.whitespace('name')",
            'displayKey' => 'name',
            'limit' => 10,
            'templates' => [
                'header' => '<h3 class="name">City</h3>'
            ]
        ],
        [
            'remote' => [
                'url' => Url::to(['get-states']). '?q=%QUERY',
                'wildcard' => '%QUERY'
            ],
            'datumTokenizer' => "Bloodhound.tokenizers.obj.whitespace('name')",
            'displayKey' => 'name',
            'limit' => 10,
            'templates' => [
                'header' => '<h3 class="name">State</h3>'
            ]
        ]
    ]
]) ?>

```

For more options, visit: http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/
