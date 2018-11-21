<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\Group;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class Teacher extends ActiveRecord
{
    public static function tableName()
    {
        return '{{teachers}}';
    }

    public function getGroups()
    {
        return $this->hasOne(Group::className(), ['group_id' => 'id']);
    }
}
