<?php

use yii\db\Migration;

/**
 * Class m210419_044822_fecshop_tables
 */
class m210419_044822_fecshop_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $arr = [
            "
            alert table full_search_product add INDEX  (`name`,`lang`)
            ",
            "
            alert table full_search_product add INDEX  (`product_id`,`lang`)
            ",
        ];
        
        
        foreach ($arr as $sql) {
            $this->execute($sql);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210419_044822_fecshop_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210419_044822_fecshop_tables cannot be reverted.\n";

        return false;
    }
    */
}
