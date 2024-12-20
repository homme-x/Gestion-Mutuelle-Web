<?php
/**
 * Created by PhpStorm.
 * User: medric
 * Date: 27/12/18
 * Time: 20:42
 */

namespace app\models;

use yii\db\ActiveRecord;

class Help extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'help';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContributions()
    {
        return $this->hasMany(Contribution::class, ['help_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Member::class, ['id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHelpType()
    {
        return $this->hasOne(HelpType::class, ['id' => 'help_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWaitedContributions()
    {
        return $this->hasMany(Contribution::class, ['help_id' => 'id'])
            ->where(['state' => false]);
    }

    public function contributions() {
        return $this->getContributions()->all();
    }

    public function waitedContributions() {
        return $this->getWaitedContributions()->all();
    }

    public function contributedAmount() {
        return $this->getContributions()->sum('amount');
    }

    public function deficit() {
        return $this->amount - $this->contributedAmount();
    }

    public function member() {
        return $this->getMember()->one();
    }

    public function helpType() {
        return $this->getHelpType()->one();
    }
}