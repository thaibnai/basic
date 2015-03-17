<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tickets".
 *
 * @property integer $ticket_id
 * @property string $ticket_title
 * @property string $ticket_description
 * @property integer $image
 * @property string $status
 * @property string $date
 * @property integer $employee_id
 *
 * @property Emloyee $employee
 * @property Status $status0
 */
class Tickets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tickets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ticket_title', 'ticket_description', 'image', 'status', 'date', 'employee_id'], 'required'],
            [['ticket_description'], 'string'],
            [['image', 'employee_id'], 'integer'],
            [['date'], 'safe'],
            [['ticket_title'], 'string', 'max' => 40],
            [['status'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ticket_id' => 'Ticket ID',
            'ticket_title' => 'Ticket Title',
            'ticket_description' => 'Ticket Description',
            'image' => 'Image',
            'status' => 'Status',
            'date' => 'Date',
            'employee_id' => 'Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Emloyee::className(), ['emloyee_id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['s_type' => 'status']);
    }
}
