<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "content_site".
 *
 * @property string $about_hepatitis
 * @property string $about_us
 * @property string $delivery
 */
class ContentSite extends ActiveRecord
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
            'about_hepatitis' => 'Раздел "Что нужно знать"',
            'about_us' => 'Раздел "О нас"',
            'delivery' => 'Доставка',
        ];
    }
}
