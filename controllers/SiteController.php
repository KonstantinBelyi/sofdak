<?php

namespace app\controllers;

use Yii;
use app\models\Product;
use app\models\ContentSite;
use app\models\Contact;

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

        $contact = new Contact();

        if ($contact->load(Yii::$app->request->post()))
        {
            if ($contact->save())
            {
                $contact->sendMail(Yii::$app->params['adminEmail'], $contact);

                return $this->refresh();
            }
        }

        $this->setMeta('Гепатит С/Софосбувир + Даклатасвир/Украина/Киев' , $keywords, $description);

        return $this->render('index', compact('product', 'about', 'contact'));
    }
}
