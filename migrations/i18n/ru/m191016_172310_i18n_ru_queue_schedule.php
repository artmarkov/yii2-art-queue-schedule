<?php

use yii\db\Migration;

class m191016_172310_i18n_ru_queue_schedule extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'queue_schedule', 'label' => 'Фоновые задания', 'language' => 'ru']);
    }

}