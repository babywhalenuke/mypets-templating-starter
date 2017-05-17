<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
    <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $title ?></h1>
      <p>user <?= $username ?> logged in with password: <?= $password ?></p>
      <h3> TEMP SON </h3>
      <p>It's kinda hot : <?= $temp ?> degrees to be exact.</p>
    <!-- Add some functionality in the tempplating -->
    
    <p>Non Retard units : <?= $temp - 32 * (5.0/9.0) ?> degrees C </p>
    
    <h3>COLOR</h3>
    <p>I like <?= $color ?></p>
    
    <h2> CIRCLES!!!!</h2>
    <p>Circumference is <?= (2 * 3.14 * $radius) ?> INCHES BABY</p>
    
    <h1>REPEATING HERE "REPEAT" Element </h1>
    
    <?php foreach (($books?:[]) as $book): ?>
        <p><?= trim($book) ?></p>
        <p><a href="<?= $book ?>"> <?= $book ?></a></p>
    <?php endforeach; ?>
    
    <h3> Addresses </h3>
    <p><?= $addresses['primary'] ?></p>
    <p><?= $addresses['secondary'] ?></p>
  
    <?php foreach (($addresses?:[]) as $key=>$value): ?>
        <p><?= $key ?> - <?= $value ?></p>
    <?php endforeach; ?>
    <h1> PICK YO DESSERT BITCH</h1>
    <?php foreach (($desserts?:[]) as $dessert=>$desc): ?>
    <input type="checkbox" value="<?= $dessert ?>"><?= $desc ?> <br>
    <?php endforeach; ?>
    </body>
</html>