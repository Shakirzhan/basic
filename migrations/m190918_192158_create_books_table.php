<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m190918_192158_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'name_book' => $this->text(),
            'fullname_author' => $this->text(),
            'author_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('books');
    }
}
