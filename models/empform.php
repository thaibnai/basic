<?php

namespace app\models;
use yii\base\Model;  

class Empform extends model
{
public $name;
public $email;
public function rules()
{
	return [
	[['name','email'],'required'],
	['email','email'],
	];
}


}





?>