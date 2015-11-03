<?php

namespace app\controllers\master;

use Yii;
use yii\web\Controller;

/**
 * BranchController implements the CRUD actions for branch model.
 */
class BranchController extends Controller
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
