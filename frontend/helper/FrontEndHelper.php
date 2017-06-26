<?php

/**
 * Created by PhpStorm.
 * User: haiye
 * Date: 25/6/2017
 * Time: 4:51 PM
 */
namespace frontend\helper;

use dektrium\user\models\Profile;
use common\models\User;

class FrontEndHelper
{
    public static function getUserName($id) {

        $username = '';
        $user = User::find()->where(['=','id',$id])->asArray()->one();
        $proFileName = Profile::find()->where(['=','user_id',$id])->asArray()->one()['name'];

        $username = $user['username'];
        if ($user['full_name']) {
            $username = $user['full_name'];
        }
        if ($proFileName) {
            $username = $proFileName;
        }

        return $username;
    }
}