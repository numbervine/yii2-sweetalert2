<?php
namespace numbervine\sweetalert2;

use yii\web\AssetBundle;

class SweetAlert2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/sweetalert2/dist/';

    public $css = [
        'sweetalert2.all.min.css'
    ];

    public $js = [
    		'sweetalert2.all.min.js'
    ];
}
