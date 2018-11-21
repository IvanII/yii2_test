<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Group;

/**
 * Class Lesson
 * @package app\models
 */
class Lesson extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{lessons}}';
    }

    /**
     * Relation with Group
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::class, ['id' => 'group_id']);
    }
}
