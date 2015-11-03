<?php

namespace app\controllers\fico;

use Yii;
use yii\rest\ActiveController;

/**
 * GlRestController implements the Rest controller for GlHeader model.
 */
class GlRestController extends ActiveController
{

    public $modelClass = 'app\models\fico\GlHeader';
}
