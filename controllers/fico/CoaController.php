<?php

namespace app\controllers\fico;

use Yii;
use yii\web\Controller;

/**
 * CoaController implements the CRUD actions for Coa model.
 */
class CoaController extends Controller
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
