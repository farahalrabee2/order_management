<?php

use yii\db\Migration;

/**
 * Handles the creation of table `orders`.
 */
class m170717_093718_create_orders_table extends Migration
{


    public $table = '{{%orders}}';
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'order_number' => $this->integer(11),
            'amount' => $this->float(),
            'order_description' => $this->string(255),
            'customer_id' => $this->integer()->unsigned(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
        $this->addForeignKey('orders_fk_customer_users', $this->table, 'customer_id', '{{%customers}}' , 'id', 'RESTRICT', 'RESTRICT');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('orders');
    }
}
