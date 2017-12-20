<?php
/**
 * @license Copyright 2017 Thomas Varghese, MIT License
 * see https://github.com/numbervine/yii2-sweetalert2/blob/master/LICENSE
 */

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
