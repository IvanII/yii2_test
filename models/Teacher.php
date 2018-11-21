<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\Group;

/**
 * Class Teacher
 * @package app\models
 */
class Teacher extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{teachers}}';
    }

    /**
     * Relation with Group
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasOne(Group::class, ['group_id' => 'id']);
    }
}
