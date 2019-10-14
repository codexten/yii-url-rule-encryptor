<?php

use codexten\yii\web\url\rules\encryptor\EncriptorUrlRule;

return [
    'components' => [
        'urlManager' => [
            'rules' => [
                'encryptor' => [
                    'class' => EncriptorUrlRule::class,
//                    'connectionID' => 'db', /* ... */
                ],
            ],
        ],
    ],
];