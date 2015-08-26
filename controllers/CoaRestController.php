<?php

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;

/**
 * CoaRestController implements the Rest controller for Coa model.
 */
class CoaRestController extends ActiveController
{
    public $modelClass = 'app\models\Coa';
    
}
