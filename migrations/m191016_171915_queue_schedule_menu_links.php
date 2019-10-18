<?php

use yii\db\Migration;

class m191016_171915_queue_schedule_menu_links extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link}}', ['id' => 'queue_schedule', 'menu_id' => 'admin-menu', 'link' => '/queue-schedule/default/index', 'image' => 'coffee', 'created_by' => 1, 'order' => 99]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'queue_schedule', 'label' => 'Queue Schedule', 'language' => 'en-US']);
    }

    public function down()
    {
        $this->delete('{{%menu_link}}', ['like', 'id', 'queue_schedule']);
    }
}