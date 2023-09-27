<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Contatos".
 *
 * @property int $Id
 * @property string $Nome
 * @property string $Telefone
 * @property string $Email
 * @property string|null $Nota
 */
class Contatos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Contatos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome'], 'required','message'=>'Por favor preencha com um nome'],
            [['Email'], 'required','message'=>'Por favor preencha com um Email'],
            [['Telefone'], 'required','message'=>'Por favor preencha com um número'],
            [['Nome', 'Email', 'Nota'], 'string', 'max' => 255],
            [['Telefone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nome' => 'Nome',
            'Telefone' => 'Telefone',
            'Email' => 'Email',
            'Nota' => 'Nota',
        ];
    }
}
