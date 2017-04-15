<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

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
            [['name', 'email', 'phone', 'created_at', 'updated_at'], 'required'],
            [['message', 'status'], 'string'],
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
            'id' => '№ заказа',
            'name' => 'Имя',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'message' => 'Сообщение',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'status' => 'Статус',
        ];
    }
}
