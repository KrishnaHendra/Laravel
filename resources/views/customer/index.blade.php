<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <table>
      <tr>
        <th>Customer_ID</th>
        <th>Name</th>
        <th>Address</th>
      </tr>
      @<?php foreach ($customer as $customerlist): ?>
        <tr>
          <th>{{ $customerlist->customer_id}}</th>
          <th>{{ $customerlist->name}}</th>
          <th>{{ $customerlist->address}}</th>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
<table>
  <tr>
    <th>Customer_ID</th>
    <th>Name</th>
    <th>Address</th>
  </tr>
  @<?php foreach ($customer as $customerlist): ?>
    <tr>
      <th>{{ $customerlist->customer_id}}</th>
      <th>{{ $customerlist->name}}</th>
      <th>{{ $customerlist->address}}</th>
    </tr>
  <?php endforeach; ?>
</table>
<!-- @foreach ($customer as $customerlist)
    {{ $customerlist->customer_id}}
    <p style="color: #ff0000;"> {{ $customerlist->name}}</p>
    <p style="color: green;"> {{ $customerlist->address}}</p>

    <br />
@endforeach -->
