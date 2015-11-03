<?php

namespace app\controllers\master;

use Yii;
use yii\rest\ActiveController;

/**
 * BaranchRestController implements the Rest controller for branch model.
 */
class BranchRestController extends ActiveController
{

    public $modelClass = 'app\models\master\branch';
}
