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

  
    
    echo 'Existing Todos Records.<br>';
     todos::findAll();
     echo '<br>';
     
     echo 'Creating new id 24 in todos table.<br>';
     $record = new todo();
     $record->id='';
     $record->owneremail='dbp54@njit.edu';
     $record->ownerid='24';
     $record->createddate='2017-11-10 00:00:00';
     $record->duedate='2017-12-12 00:00:00';
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
     echo 'Updating details of id=24.<br>';
     $record = new todo();
     $record->id=24;
     $record->owneremail='dharapatel@gmail.com';
     $record->ownerid='54';
     $record->createddate='2017-05-06 00:00:00';
     $record->duedate='2017-07-08 00:00:00';
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