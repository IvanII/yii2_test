<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use app\models\Lesson;
use yii\db\Expression;

/**
 * Class LessonSearch
 * @package app\models
 */
class LessonSearch extends Lesson
{
    /**
     * @return array
     */
    public function attributes()
    {
        return array_merge(parent::attributes(), ['group.teacher.first_name']);
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['name', 'group.teacher.first_name'], 'string'],
        ];
    }

    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Lesson::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'attributes' => [
                    'time' => [
                        'asc' => [new Expression('time IS NULL ASC, time ASC')],
                        'desc' => [new Expression('time IS NULL ASC, time DESC')]
                    ],
                ],
                'defaultOrder' => ['time' => SORT_DESC],
            ]
        ]);

        $query->joinWith(['group.teacher' => function($query) { 
            $query->from(['teacher' => 'teachers']); 
        }]);
        

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'like', 
            'teacher.first_name', 
            $this->getAttribute('group.teacher.first_name')
        ]);

        $query->andFilterWhere(['like', 'lessons.name', $this->name]);


        return $dataProvider;
    }
}
