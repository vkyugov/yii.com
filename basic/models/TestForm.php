<?php


namespace app\models;
use yii\base\Model;


class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'it\'s my name',
            'email' => 'my email',
            'text' => 'my text',
        ];
    }

    public function rules()
    {
        return [
          ['name', 'required'],
          ['email', 'email'],
          ['text', 'testValid'],
        ];
    }

    public function testValid($a){
        if (strlen($this->$a) > 7){
            $this->addError($a, 'too long');
        }
    }
}