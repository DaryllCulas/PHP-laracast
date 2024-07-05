<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Ticket Generator Example</h1>
  <?php

  $GeneratorObj = new \App\Views\GeneratorExample(new \App\Models\Ticket());

  echo $GeneratorObj->index();


  ?>
</body>

</html>