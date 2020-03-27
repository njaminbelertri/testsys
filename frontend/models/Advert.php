<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "advert".
 *
 * @property int $id
 * @property string $naslov
 * @property string $povzetek
 * @property int $avtor
 * @property string $image_src_filename						!!!-!!! dodano
 * @property string $image_web_filename						!!!-!!! dodano
 */
class Advert extends \yii\db\ActiveRecord
{

	public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naslov', 'povzetek', 'avtor'], 'required'],
            [['avtor'], 'integer'],
            [['naslov'], 'string', 'max' => 150],
            [['povzetek'], 'string', 'max' => 600],
			
			[['image'], 'safe'],  					// !!!-!!! r'lez za sliko
			[['image'], 'file', 'extensions'=>'jpg, gif, png'],
			[['image'], 'file', 'maxSize'=>'100000'],
			[['image_src_filename', 'image_web_filename'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'naslov' => Yii::t('app', 'Naslov'),
            'povzetek' => Yii::t('app', 'Povzetek'),
            'avtor' => Yii::t('app', 'Avtor'),
			
			'image_src_filename' => Yii::t('app', 'Filename'),  			// !!!-!!! se za prevode
			'image_web_filename' => Yii::t('app', 'Pathname'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return AdvertQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdvertQuery(get_called_class());
    }
}
