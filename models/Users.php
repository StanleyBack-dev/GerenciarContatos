<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $Id
 * @property string $Login
 * @property string $Senha
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Login', 'Senha'], 'required'],
            [['Login', 'Senha'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Login' => 'Login',
            'Senha' => 'Senha',
        ];
    }
}
