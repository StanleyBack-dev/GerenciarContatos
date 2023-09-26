<?php

use yii\db\Migration;

/**
 * Class m230926_130424_Contatos
 */
class m230926_130424_Contatos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Contatos', [
            'Id' => $this->primaryKey(),
            'Nome' => $this->string()->notNull(),
            'Telefone' => $this->string(15)->notNull(),
            'Email' => $this->string()->notNull(),
            'Nota' => $this->string(),
        ]);
    }
    

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this-> dropTable('Contatos');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230926_130424_Contatos cannot be reverted.\n";

        return false;
    }
    */
}
