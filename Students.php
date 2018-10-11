<?php
class Student {
  public $id;
  public $first_name;
  public $last_name;
  public $email_address;

  function Student($id, $first_name, $last_name, $email_address) {
    $this->id = $id;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email_address = $email_address;
  }
  
  function to_string() {
     return "{$this->id} - {$this->first_name} - {$this->last_name} - {$this->email_address} ". PHP_EOL;
  }

  function insertar(){
    $sqlInsert = mysqli_query($mysqli,"INSERT INTO students VALUES('', $this->id, $this->first_name, $this->last_name, $this->email_address)");
  }
  
}
?>