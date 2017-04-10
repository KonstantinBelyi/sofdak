<?php

namespace app\controllers;

use Yii;
use app\models\Product;
use app\models\ContentSite;

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

        $keywords = '';
        $description = '';
        foreach ($product as $key => $item)
        {
            $keywords .= $product[$key]['keywords'];
            $description .= $product[$key]['description'];
        }

        $about = ContentSite::find()->all();

        $this->setMeta('Гепатит С/Софосбувир + Даклатасвир/Украина/Киев' , $keywords, $description);

        return $this->render('index', compact('product', 'about'));
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
