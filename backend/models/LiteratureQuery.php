<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Literature]].
 *
 * @see Literature
 */
class LiteratureQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Literature[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Literature|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
