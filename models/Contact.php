<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "contact".
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 */
class Contact extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required'],
            [['email'], 'email'],
            [['message'], 'string'],
            [['status'], 'boolean'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Ваше имя',
            'email' => 'Ваш E-mail',
            'phone' => 'Ваш телефон',
            'message' => 'Введите сообщение',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    //отправка заказа на почту
    public function sendMail( $email, $model)
    {
        Yii::$app->mailer
            ->compose('contactMailer', ['model' => $model])
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->params['nameSite'] . ' робот'])
            ->setTo($email)
            ->setSubject('Заказ №' . $this->id)
            ->send();
    }
}
