<?php

namespace app\controllers\fico;

use Yii;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;

/**
 * CoaRestController implements the Rest controller for Coa model.
 */
class CoaRestController extends ActiveController {

    public $modelClass = 'app\models\fico\Coa';

    public function actions() {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex() {
        $activeData = new ActiveDataProvider([
            'query' => \app\models\fico\Coa::find(),
            'pagination' => false,
            'sort'=> ['defaultOrder' => ['code'=>SORT_ASC]]
        ]);
        return $activeData;
    }

}
