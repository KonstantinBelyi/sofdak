<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content_site".
 *
 * @property string $about_hepatitis
 * @property string $about_us
 * @property string $delivery
 */
class ContentSite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content_site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['about_hepatitis', 'about_us', 'delivery'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'about_hepatitis' => 'About Hepatitis',
            'about_us' => 'About Us',
        ];
    }
}
