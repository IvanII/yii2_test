<?php
use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        [
            'label' => 'Lesson',
            'attribute' => 'name',
        ],
        [
            'label' => 'Group',
            'attribute' => 'group.name',
        ],
        [
            'label' => 'Teacher',
            'attribute' => 'group.teacher.first_name',
        ],
        [
            'label' => 'Time',
            'attribute' => 'time',
        ],
    ]
]);