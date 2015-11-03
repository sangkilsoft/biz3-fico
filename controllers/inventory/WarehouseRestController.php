<?php

namespace app\controllers\inventory;

use Yii;
use yii\rest\ActiveController;

/**
 * WarehouseRestController implements the Rest controller for warehouse model.
 */
class WarehouseRestController extends ActiveController
{

    public $modelClass = 'app\models\inventory\warehouse';
}
