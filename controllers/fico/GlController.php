<?php

namespace app\controllers\fico;

use Yii;
use yii\web\Controller;

/**
 * GlController implements the CRUD actions for GlHeader model.
 */
class GlController extends Controller
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
