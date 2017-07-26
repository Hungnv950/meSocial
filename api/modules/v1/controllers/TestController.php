<?php

namespace api\modules\v1\controllers;

class TestController extends AuthenticationController
{
    public $modelClass = 'common\models\Test';

    public function afterAction($action, $result) {
        if (isset($result->pagination) && ($result->pagination !== false)) {
            $result->pagination->setPageSize(100);
        }
        return parent::afterAction($action, $result);
    }
}
