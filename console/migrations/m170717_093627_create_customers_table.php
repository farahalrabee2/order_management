<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customers`.
 */
class m170717_093627_create_customers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('customers', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(255),
            'phone' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('customers');
    }
}
