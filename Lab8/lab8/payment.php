<!DOCTYPE html>
<html>
<head>
    <title>Pokémon CheckOut Line</title>
    <link href="bootstrap.css" rel="stylesheet">
        <style type="text/css">
        body {
            padding-top: 20px;
            padding-bottom: 60px;
        }
        /* Custom container */
        .container {
            margin: 0 auto;
            max-width: 1000px;
        }
        .container > hr {
            margin: 60px 0;
        }
        .container-narrow {
        background color: #003A70; repeat 0 0;
        }
        /* Main marketing message and sign up button */
        .jumbotron {
            margin: 80px 0;
            text-align: center;
        }
        .jumbotron h1 {
            font-size: 100px;
            line-height: 1;
        }
        .jumbotron .lead {
            font-size: 24px;
            line-height: 1.25;
        }
        .jumbotron .btn {
            font-size: 21px;
            padding: 14px 24px;
            background-color: #3D73DA;
        }
        /* Supporting marketing content */
        .marketing {
            margin: 60px 0;
        }
        .marketing p + h4 {
            margin-top: 28px;
        }
        /* Customize the navbar links to be fill the entire space of the .navbar */
        .navbar .navbar-inner {
            padding: 0;
            color: #EAEBED;
        }
        .navbar .nav {
            margin: 0;
            display: table;
            width: 100%;
        }
        .navbar .nav li {
            display: table-cell;
            width: 1%;
            float: none;
        }
        .navbar .nav li a {
            font-weight: bold;
            text-align: center;
            border-left: 1px solid rgba(255,255,255,.75);
            border-right: 1px solid rgba(0,0,0,.1);
        }
        .navbar .nav li:first-child a {
            border-left: 0;
            border-radius: 3px 0 0 3px;
        }
        .navbar .nav li:last-child a {
            border-right: 0;
            border-radius: 0 3px 3px 0;
        }
        table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr{background-color: #494948}
    th {
        background-color: #FFCB05;
        color: #494948;
    }
        </style>
        <link href="bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="../bootstrap/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../bootstrap/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../bootstrap/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../bootstrap/ico/apple-touch-icon-72-precomposed.png">
                        <link rel="apple-touch-icon-precomposed" href="../bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                    <link rel="shortcut icon" href="../bootstrap/ico/favicon.png">
</head>
<body>
  <div class="container">
    <?php 
        include 'loginHeader.php';
        include 'header.php';

        // if((filter_input(INPUT_POST, 'payment') != 'paypal') && (filter_input(INPUT_POST, 'payment') != 'paymentmethod'))
        //     $_SESSION['checkoutMessage'] = "Please pay us. We put a lot of hours into this";
        //     header("Location: checkout.php");
        //     exit;
    ?>

  </div>

  <div class = "container">
    <h3>Order Details</h3>

  <?php
    $total = 0;
    $productList = null;
    if (isset($_SESSION['productList'])){
      $productList = $_SESSION['productList'];
    
      echo("<table border = \"1\"><tr><th>Product Name</th><th>Quantity</th><th>Product Price</th><th>Subtotal</th></tr>");
      foreach($productList as $id => $product){
        // display the information
        $product_name = $product['name'];
        $product_price = floatval($product['price']);
        $product_quantity = $product['quantity'];
        $subtotal = $product_price * $product_quantity;

        echo("<tr>");
        echo("<td>".$product_name."</td>");
        echo("<td align=\"center\">".$product_quantity."</td>");
        echo("<td align=\"right\">$".number_format($product_price, 2)."</td>");
        echo("<td align=\"right\">$".number_format($subtotal, 2)."</td>");

        $total = $total + $subtotal;
      }
      echo("<tr><td colspan=\"3\" align=\"right\"><b>Order Total</b></td><td align=\"right\">$".number_format($total,2)."</td></tr>");
      echo("</table>");
  }
  ?>
    <form method='POST' action="order.php">
    <input type="hidden" name="customerId" value=<?php echo(filter_input(INPUT_POST, 'customerId'))?>>
    <input type="hidden" name="password" value=<?php echo(filter_input(INPUT_POST, 'password'))?>>
    <?php
        if(filter_input(INPUT_POST, 'payment') == 'paypal'){
            echo('<div id="paypal-button"></div>');
            echo('<script src="https://www.paypalobjects.com/api/checkout.js"></script>');
            echo("<script>paypal.Button.render({
                env: 'sandbox',
                client: {sandbox: 'demo_sandbox_client_id', production: 'demo_production_client_id'},
                locale: 'en_US',
                style: {size: 'small',color: 'gold',shape: 'pill',},
                    commit: true,
        
                payment: function(data, actions) {return actions.payment.create({transactions: [{amount: {total:".$total.",currency: 'CAD'}}]});},
                onAuthorize: function(data, actions) {
                    return actions.payment.execute().then(function() {window.alert('Thank you for your purchase!');});
                }
                }, '#paypal-button');
        
                </script>");
        }else if(filter_input(INPUT_POST, 'payment') == 'paymentmethod'){
            echo('Payment Type<br>');
            echo('<input type="text" name="paymentType"><br>');
            echo("Payment Number<br>");
            echo("<input type='password' name='paymentNumber'><br>");
            echo("Payment Expiry Date<br>");
            echo("<input type='date' name='paymentExpiryDate'><br>");
        }
    ?>

    <input type='submit' value='submit'>

    </form>

  </div>

</body>
</html>