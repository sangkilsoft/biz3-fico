<?php

namespace app\controllers\fico;

use Yii;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;

/**
 * AccPeriodeRestController implements the Rest controller for AccPeriode model.
 */
class AccPeriodeRestController extends ActiveController {

    public $modelClass = 'app\models\fico\AccPeriode';

    public function actions() {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex() {
        $activeData = new ActiveDataProvider([
            'query' => \app\models\fico\AccPeriode::find(),
            'pagination' => false
        ]);
        return $activeData;
    }

}
