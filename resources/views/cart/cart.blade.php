<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">Shopping cart</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $items = Cart::getContent();
        foreach($items as $item){ ?>
        <tr>
            <td><?php echo $item->id; ?></td>
            <td><?php echo $item->name; ?></td>
            <td><?php echo $item->price; ?></td>
            <td class="qty">
                {!! Form::open(['url' => '/updateCart', 'method'=>'post']) !!}
                <input type="text" name="quantity" value="<?php echo $item->quantity;?>">
                <input type="hidden" name="id" value="<?php echo $item->id;?>">
                <input type="submit" value="Submit">
                {!! Form::close() !!}
            </td>
            <td><a href="">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
