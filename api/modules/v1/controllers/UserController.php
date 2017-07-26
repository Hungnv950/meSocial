<?php

namespace api\modules\v1\controllers;


class UserController extends AuthenticationController
{
    public $modelClass = 'dektrium\user\models\User';

    public function afterAction($action, $result) {
        if (isset($result->pagination) && ($result->pagination !== false)) {
            $result->pagination->setPageSize(100);
        }
        return parent::afterAction($action, $result);
    }
}
