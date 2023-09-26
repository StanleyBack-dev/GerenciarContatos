<?php

use yii\db\Migration;

/**
 * Class m230926_131944_Users
 */
class m230926_131944_Users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        # USERS(ID, LOGIN, SENHA)
        $this->createTable('Users', [
            'Id' => $this->primaryKey(),
            'Login' => $this->string()->notNull(),
            'Senha' => $this->string()->notNull()->check('LENGTH([[Senha]]) >= 8'),
        ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230926_131944_Users cannot be reverted.\n";

        return false;
    }
    */
}
