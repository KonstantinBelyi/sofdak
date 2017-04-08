<?php

namespace app\controllers;

use Yii;
use app\models\Product;

class SiteController extends AppController
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $product = Product::find()
            ->where(['status' => '1'])
            ->all();

        return $this->render('index', compact('product'));
    }

//    /*
//     * Displays contact page.
//     *
//     * @return string
//     */
//    public function actionContact()
//    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//            Yii::$app->session->setFlash('contactFormSubmitted');
//
//            return $this->refresh();
//        }
//        return $this->render('contact', [
//            'model' => $model,
//        ]);
//    }

}
