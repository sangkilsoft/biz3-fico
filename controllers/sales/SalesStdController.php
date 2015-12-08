<?php

namespace app\controllers\sales;

use Yii;
use yii\web\Controller;

/**
 * SalesStdController implements the CRUD actions for Sales model.
 */
class SalesStdController extends Controller
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
