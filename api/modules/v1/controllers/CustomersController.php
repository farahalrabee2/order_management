<?php

namespace api\modules\v1\controllers;
use api\modules\v1\models\Customers;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class CustomersController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Customers';
    public function actions()
    {
        $parentActions = parent::actions();
        $actions = [];
        $actions['index'] = $parentActions['index'];
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider()
    {
        $query = Customers::find()->with('orders');

        // You can prepare $query here

        return new ActiveDataProvider([
            'query' => $query,
        ]);
    }


}
