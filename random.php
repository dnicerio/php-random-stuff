<?php 

  $newLine = '<br>';
  $name = 'Darryl';
  $age = 33;
  $isCompleted = false;
  $world = 'Hello World';
  $greet = 'Wonderful day ';
  $pi = 3.14;
  $peopleOne = ['darryl', 'sem', 'aren'];
  $peopleTwo = array('ryu', 'ken', 'guile');
  define('NEWWORLD', 'Hello New World');


  echo $world;
  echo '<br>';
  echo $age;
  echo '<br>';
  echo NEWWORLD;
  echo '<br>';
  echo $greet . $name . '. You are turning ' . $age . ' today, right?';
  echo '<br>';
  echo "$greet $name. You are turning $age today, right?";
  echo '<br>';
  echo strlen(NEWWORLD);
  echo $newLine;
  echo strtoupper($name);
  echo $newLine;
  echo strtolower($name);
  echo $newLine;
  echo str_replace('r', 'n', $name);
  echo $newLine;
  echo ++$age;
  echo $newLine;
  echo $age -= 1;
  echo $newLine;
  echo floor($pi);
  echo $newLine;
  echo ceil(pi());
  echo $newLine;
  echo pi();
  echo $newLine;
  echo $peopleOne[1];
  echo $newLine;
  echo $peopleTwo[2];
  echo $newLine;
  print_r($peopleOne);
  echo $newLine;
  $peopleOne[0] = 'teo';
  print_r($peopleOne);
  echo $newLine;
  $peopleTwo[] = 'zangief';
  print_r($peopleTwo);
  echo $newLine;
  array_push($peopleTwo, 'chun-li');
  print_r($peopleTwo);
  echo $newLine;
  echo count($peopleTwo);
  echo $newLine;
  $peopleAll = array_merge($peopleOne, $peopleTwo);
  print_r($peopleAll);
  echo $newLine;
  $fighters = ['japan' => 'ryu', 'russia' => 'zangief', 'usa' => 'guile'];
  print_r($fighters);
  echo $newLine;
  echo $fighters['russia'];
  echo $newLine;
  $fighters['china'] = 'chun-li';
  print_r($fighters);
  echo $newLine;
  $fighters['usa'] = 'ken';
  print_r($fighters);
  echo $newLine;
  echo count($fighters);
  echo $newLine;
  $fightersNew = ['hongkong' => 'fei-long', 'england' => 'cammy', 'jamaica' => 'deejay'];
  $fightersAll = array_merge($fighters, $fightersNew);
  print_r($fightersAll);

  $users = [
    ['name' => 'darryl', 'age' => 33, 'role' => 'web developer'],
    ['name' => 'sem', 'age' => 32, 'role' => 'collections'],
    ['name' => 'aren', 'age' => 31, 'role' => 'account manager']
  ];
  
  $users[] = ['name' => 'chester', 'age' => 32, 'role' => 'entrepreneur'];
  print_r($users);
  echo $newLine;
  $popped = array_pop($users);
  print_r($popped);
  echo $newLine;
  print_r($users);
  echo $newLine;

  $places = ['pasay', 'makati', 'manila'];

  for($i = 0; $i < count($places); $i++) {
    echo $places[$i] . '<br>';
  }

  foreach($places as $place){
    echo $place . $newLine;
  }
  
  foreach($users as $user){
    echo 'Hi! I\'m ' . $user['name'] . '. ' . $user['age'] . ' years old. I work as ' . $user['role'] . '.';
    echo '<br>';
  }

  $i = 0;

  while($i < count($users)){
    echo $users[$i]['role'];
    echo '<br>';
    $i++;
  }

  $products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
  ];
  
  foreach($products as $product) {
    if($product['price'] <= 10 && $product['price'] > 2) {
      echo $product['name'];
      echo '<br>';
    } elseif($product['price'] >= 20) {
      continue;
    }
  }

  function defineGameGenre($games, $creator) {
    return "{$games['title']} is an {$games['genre']} game. It was created by {$creator}.";
  }

  $stored = defineGameGenre(['title' => 'The Legend of Zelda', 'genre' => 'RPG'], 'Shigeru Miyamoto');
  echo $stored;

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>User Database</h1>
  <ul>
    <?php foreach($users as $user) { ?>
      <?php if($user['age'] > 30) { ?>

        <h2><?php echo $user['name'] ?></h4>
        <p>Age: <?php echo $user['age'] ?></p>
        <p>Role: <?php echo $user['role'] ?></p>

      <?php } ?>
    <?php } ?>
  </ul>
</body>
</html>