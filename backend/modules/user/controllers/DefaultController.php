<?php

namespace backend\modules\user\controllers;

use yii\web\Controller;
use common\models\User;

/**
 * Default controller for the `user` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = User::find();
        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
