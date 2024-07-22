<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
</head>
<table>

  <style>
  table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
  }

  table tr th,
  table tr td {
    border: 1px #eee solid;
    padding: 5px;
  }

  .color-green {
    color: green;
  }

  .color-red {
    color: red;
  }

  .color-gray {
    color: gray;
  }

  .color-orange {
    color: orange;
  }
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
          <td><?= $invoice['id'] ?></td>
          <td><?= $invoice['invoice_number'] ?></td>
          <td><?= number_format($invoice['amount']) ?></td>
          <td class="color-<?= \App\Enums\InvoiceStatus::tryFrom($invoice['status'])->color() ?>">
            <?= \App\Enums\InvoiceStatus::tryFrom($invoice['status'])->toString() ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>

    </table>
  </body>

</html>