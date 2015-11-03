<?php

namespace app\controllers\inventory;

use Yii;
use yii\web\Controller;

/**
 * WarehouseController implements the CRUD actions for warehouse model.
 */
class WarehouseController extends Controller
{
    
    /**
     * Display main page.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('main');
    }
}
