<?php

namespace app\models;

use yii\db\ActiveRecord;

class Help extends ActiveRecord
{
    public static function tableName()
    {
        return 'help';
    }

    public function rules()
    {
        return [
            [['member_id', 'help_type_id', 'amount'], 'required'],
            [['member_id', 'help_type_id'], 'integer'],
            [['amount'], 'number'],
        ];
    }

    /**
     * Relation avec les contributions
     */
    public function getContributions()
    {
        return $this->hasMany(Contribution::class, ['help_id' => 'id']);
    }

    /**
     * Contributions en attente
     */
    public function getWaitedContributions()
    {
        return $this->getContributions()->where(['state' => false]);
    }

    /**
     * Calcul du montant total des contributions
     */
    public function getContributedAmount()
    {
        return $this->getContributions()->sum('amount') ?: 0;
    }

    /**
     * Calcul du déficit
     */
    public function getDeficit()
    {
        return $this->amount - $this->getContributedAmount();
    }

    /**
     * Relation avec le membre
     */
    public function getMember()
    {
        return $this->hasOne(Member::class, ['id' => 'member_id']);
    }

    /**
     * Relation avec le type d'aide
     */
    public function getHelpType()
    {
        return $this->hasOne(HelpType::class, ['id' => 'help_type_id']);
    }
}
