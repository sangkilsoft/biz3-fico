<?php

namespace app\controllers\sales;

use Yii;
use yii\rest\ActiveController;

/**
 * SalesRestController implements the Rest controller for Sales model.
 */
class SalesRestController extends ActiveController
{

    public $modelClass = 'app\models\sales\Sales';
}
