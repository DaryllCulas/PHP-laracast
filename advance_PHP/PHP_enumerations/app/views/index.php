<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
</head>

<body>
  <h1><?= $pageName ?></h1>
  <form action="/upload" method="post" enctype="multipart/form-data">
    <input type="file" name="receipt" />
    <button type="submit">Upload</button>
  </form>
  <hr />
  <div>

    <?php if (!empty($invoice)) : ?>
      Invoice ID: <?= htmlspecialchars($invoice['invoice_id'], ENT_QUOTES) ?>
      <br />
      Invoice amount: <?= htmlspecialchars($invoice['amount'], ENT_QUOTES) ?>
      <br />
      User: <?= htmlspecialchars($invoice['full_name'], ENT_QUOTES)  ?>
    <?php endif ?>


  </div>


</body>

</html>