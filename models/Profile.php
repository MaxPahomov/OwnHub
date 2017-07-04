<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 04.07.17
 * Time: 12:34
 */

namespace app\models;

use yii\db\ActiveRecord;


class Profile extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['profile_birth_date'], 'safe'],
            [['profile_firstname', 'profile_lastname', 'profile_patronymic'], 'string', 'max' => 255],
            [['profile_phonecell'], 'string', 'max' => 55],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'profile_id' => 'Profile ID',
            'user_id' => 'User ID',
            'profile_firstname' => 'Имя',
            'profile_lastname' => 'Фамилия',
            'profile_patronymic' => 'Отчество',
            'profile_birth_date' => 'Дата рождения',
            'profile_phonecell' => 'Номер телефона',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}