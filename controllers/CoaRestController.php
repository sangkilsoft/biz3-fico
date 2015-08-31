<?php

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;

/**
 * CoaRestController implements the Rest controller for Coa model.
 */
class CoaRestController extends ActiveController {

    public $modelClass = 'app\models\Coa';

    public function actions() {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex() {
        $activeData = new ActiveDataProvider([
            'query' => \app\models\Coa::find()->with('coas'),
            'pagination' => false
        ]);
        return $activeData;
    }

}
