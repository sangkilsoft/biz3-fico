<?php

namespace app\controllers\sales;

use Yii;
use yii\web\Controller;

/**
 * SalesPosController implements the CRUD actions for Sales model.
 */
class SalesPosController extends Controller
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
