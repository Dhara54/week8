<?php

class Manage{
  public static function autoload($class){
    include $class.'.php';
  }
}

spl_autoload_register(array('Manage','autoload'));

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$obl=new main();

class main{

    public function __construct(){
     echo 'Accounts Records<br>';
     accounts::findAll();
     echo '<br>';
     
     echo 'Creating new id 10 in accounts table<br>';
     $record = new account();
     $record->id='';
     $record->fname='Dhara';
     $record->lname='Patel';
     $record->email='dharapatel@gmail.com';
     $record->phone='253-456-1245';
     $record->birthday='05/17/1995';
     $record->gender='female';
     $record->password='abcd';
     $record->save();
     echo 'Record added<br>';
     accounts::findAll();
     echo '<br>';
     
     echo 'Searching id 10 in accounts table<br>';
     $id=12;
     accounts::findOne($id);
     
     echo '<br>';
     echo 'Updating details of id 10<br>';
     $record = new account();
     $record->id=10;
     $record->firstname='Meet';
     $record->lastname='Patel';
     $record->email='Meetpatel@gmail.com';
     $record->phone='456-142-5432';
     $record->birthday='02/12/1995';
     $record->gender='male';
     $record->password='asfdf';
     $record->save();
     echo 'Updated <br>';
     accounts::findOne($id);
     echo '<br>';
     //print_r($record1);
    
    echo 'Deleting id 10 from accounts<br>';
    $record=new account();
    $record->id=10;
    $record->delete();
    echo 'Deleted <br>';
    accounts::findAll();
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';


  
    
    echo 'Todos Records<br>';
     todos::findAll();
     echo '<br>';
     
     echo 'Creating new id 24 in todos table.<br>';
     $record = new todo();
     $record->id='';
     $record->owneremail='dbp54@njit.edu';
     $record->ownerid='24';
     $record->createddate='11/10/2017';
     $record->duedate='11/10/2017';
     $record->message='Active Record';
     $record->isdone='0';
     $record->save();
     echo ' Adding record.<br>';
     todos::findAll();
     echo '<br>';
     
     echo 'Searching id 12 in todos table.<br>';
     $id=12;
     todos::findOne($id);
     
     echo '<br>';
     echo 'Updating details of id 24<br>';
     $record = new todo();
     $record->id=24;
     $record->owneremail='dharapatel@gmail.com';
     $record->ownerid='54';
     $record->createddate='12/10/2017';
     $record->duedate='12/102018';
     $record->message='Active Record for update';
     $record->isdone='1';
     $record->save();
     echo 'After updating <br>';
     todos::findOne($id);
     echo '<br>';
    
    echo 'Deleting id 24 from todos.<br>';
    $record=new todo();
    $record->id=24;
    $record->delete();
    echo 'After Deleting id 24<br>';
    todos::findAll();
    echo '<br>';
    
    
    }
   
}

?>