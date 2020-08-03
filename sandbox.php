<?php

  // Super globals

  echo $_SERVER['SERVER_NAME'] . '<br />';
  echo $_SERVER['REQUEST_METHOD'] . '<br />';
  echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
  echo $_SERVER['PHP_SELF'] . '<br />';

  // Sessions
  if(isset($_POST['submit'])){
    session_start();
    $_SESSION['name'] = $_POST['name'];

    if($_POST['name'] === ''){
      session_unset();
    } elseif(count_chars($_SESSION['name']) > 0) {
      echo $_SESSION['name'] . '<br />';
    } else {
      echo 'else result' . '<br />';
    }

    // Set cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    $gender = $_COOKIE['gender'] ?? 'Unknown';
    echo htmlspecialchars($gender) . '<br />';
  }

  // File system
  $quotes = readfile('readme.txt');
  $file = 'readme.txt';

  if(file_exists($file)){
    // Read file
    echo readfile($file) . '<br />';

    // Copy file
    copy($file, 'quotes.txt');

    // Absolute path
    echo realpath($file) . '<br />';

    // File size
    echo filesize($file) . '<br />';

    // Rename file
    rename($file, 'readme.txt');
  } else {
    echo 'file does not exist';
  }

  // Make directory
  // mkdir('quotes');

  // Classes
  class User {
    private $name;
    private $email;

    public function __construct($name, $email){
      $this->name = $name;
      $this->email = $email;
    }

    public function login(){
      echo $this->name . ' has logged in';
    }

    public function getName(){
      echo $this->name;
    }

    public function setName($name){
      if(is_string($name) && strlen($name) > 1){
        $this->name = $name;
        echo 'name has been updated to ' . $this->name;
      } else {
        echo 'not a valid name';
      }
    }
  }

  // $userOne = new User();
  // $userOne->login();
  // echo $userOne->name;
  // echo $userOne->email;

  $userTwo = new User('yoshi', 'yoshi@gmail.com');
  // echo $userTwo->name;
  // echo $userTwo->email;
  // echo $userTwo->login();

  echo $userTwo->getName();
  $userTwo->setName('mario');
  echo $userTwo->getName();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name">
    <select name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>