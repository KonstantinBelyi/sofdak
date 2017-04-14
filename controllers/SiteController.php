<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\Product;
use app\models\ContentSite;
use app\models\Contact;
use app\models\LoginForm;

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

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login())
        {
            return $this->goBack();
        }

        $this->layout = false;

        $this->setMeta('Вход');

        return $this->render('login', compact('model'));
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
