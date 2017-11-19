<?php
class account extends model {
  
  protected static $modelName = 'account';
  public $id;
	public $email;
	public $firstname;
	public $lastname;
	public $gender;
	public $password;
  
  public static function tableName(){
    $tableName='accounts';
    return $tableName;
  }
}

?>