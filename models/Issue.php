<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "issue".
 *
 * @property integer $issue_id
 * @property string $issue_title
 * @property string $issue_description
 * @property string $issue_image
 * @property string $date
 * @property string $status
 * @property string $email
 * @property string $your_department
 */
class Issue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
  
    public static function tableName()
    {
        return 'issue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['issue_title', 'issue_description', 'date', 'your_department'], 'required'],
            [['issue_description', 'status', 'your_department'], 'string'],
            [['date'], 'safe'],
            [['issue_title', 'email'], 'string', 'max' => 30],
            [['issue_image'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'issue_id' => 'Issue ID',
            'issue_title' => 'Issue Title',
            'issue_description' => 'Issue Description',
            'issue_image' => 'Issue Image',
            'date' => 'Date',
            'status' => 'Status',
            'email' => 'Email (optional)',
            'your_department' => 'Your Department',
        ];
    }
}
