<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\Lesson;
use app\models\Teacher;

/**
 * Class Group
 * @package app\models
 */
class Group extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{groups}}';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLessons()
    {
        return $this->hasMany(Lesson::class, ['group_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::class, ['id' => 'teacher_id']);
    }
}