<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name_book
 * @property string $fullname_author
 * @property int $author_id
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_book', 'fullname_author'], 'string'],
            [['author_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_book' => 'Name Book',
            'fullname_author' => 'Fullname Author',
            'author_id' => 'Author ID',
        ];
    }
}
