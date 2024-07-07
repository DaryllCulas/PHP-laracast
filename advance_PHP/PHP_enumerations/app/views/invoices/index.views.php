<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
</head>
<style>

</style>

<body>
  <h1>Invoices</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Invoice Number</th>
        <th>Amount</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($invoices as $invoice) : ?>
      <tr>
        <td><?= $invoice->id ?></td>
        <td><?= $invoice->invoiceNumber ?></td>
        <td><?= $invoice->amount ?></td>
        <td><?= $invoice->status ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>

  </table>
</body>

</html>