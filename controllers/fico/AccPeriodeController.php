<?php

namespace app\controllers\fico;

use Yii;
use yii\web\Controller;

/**
 * AccPeriodeController implements the CRUD actions for AccPeriode model.
 */
class AccPeriodeController extends Controller
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
