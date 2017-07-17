<?php

namespace api\modules\v1\controllers;

use api\modules\v1\models\Customers;
use api\modules\v1\models\Orders;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class OrdersController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Orders';

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
        $query = Orders::find()->with('customer');

        // You can prepare $query here

        return new ActiveDataProvider([
            'query' => $query,
        ]);
    }
}



