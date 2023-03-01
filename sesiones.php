 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/principal.css">
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<?php
session_start();
if(!isset($_SESSION['nombre'])){
     echo '<script language="javascript">alert("Debes iniciar sesiòn para acceder a la compra de sesiones");window.location.href="login.php"</script>'; 
}else{ 
    
?>
<?php
include ("conection.php");
$conn = conectar();
$sql = "SELECT * FROM sesiones";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>SESIONES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
     <link rel="stylesheet" href="css/sesiones.css">
</head>
<?php
include ("header.php");
?>
    
    <main>    
        <nav class="bg-dark navbar-dark">
  <div class="container">
  </div>
  </nav>
   <section id="header" class="jumbotron text-center">
     <h1 class="display-3">INSPIRE PHOTOGRAPHY</h1>
     <p class="lead">Sesiones</p>
     <a href="index.php" class="btn btn-outline-success btn-sm">VOLVER</a>

  
</section>
  
<section id="gallery">
  <div class="container">
    <div class="row">
            <?php
    foreach ($query as $row) {
    ?>
  <div class="col-lg-4 mb-4">
  <div class="card">
      <img class="imagenS" src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['nombreSesion'] ?></h5>
        <p class="card-text"><?php echo $row['descSesion'] ?></p>
         <p class="card-text"><?php echo $row['precio'] ?></p>
         
      </div>
    
      </div>  
    </div>
      <?php
        }
        ?>
    
        <div id="smart-button-container">
      <div style="text-align: center;">
        <div style="margin-bottom: 1.25rem;">
          <p></p>
          <form name="form" method="post" action="compras.php">
          <select name="sesion" id="item-options" >
                        <?php
    foreach ($query as $row) {
    ?>
              <option name="sesion" value="<?php echo $row['nombreSesion'] ?>" price="<?php echo $row['precio'] ?>"><?php echo $row['nombreSesion'] ?>" - <?php echo $row['precio'] ?></option>
           <?php
        }
        ?>
              </select>
          <select style="visibility: hidden" id="quantitySelect"><option value="1">1</option>      
        </select>
              <input type="submit" name="CONFIRMA LA COMPRA" value="CONFIRMA LA COMPRA" />
          </form>
        </div>
      <div id="paypal-button-container"></div>
      </div>
    </div>
    <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
    <script>
      function initPayPalButton() {
        var shipping = 0;
        var itemOptions = document.querySelector("#smart-button-container #item-options");
    var quantity = parseInt(1);
    var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");
    if (!isNaN(quantity)) {
      quantitySelect.style.visibility = "visible";
    }
    var orderDescription = '';
    if(orderDescription === '') {
      orderDescription = 'Item';
    }
    paypal.Buttons({
      style: {
        shape: 'pill',
        color: 'blue',
        layout: 'vertical',
        label: 'buynow',
        
      },
      createOrder: function(data, actions) {
        var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex].value;
        var selectedItemPrice = parseFloat(itemOptions.options[itemOptions.selectedIndex].getAttribute("price"));
        var tax = (0 === 0 || false) ? 0 : (selectedItemPrice * (parseFloat(0)/100));
        if(quantitySelect.options.length > 0) {
          quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
        } else {
          quantity = 1;
        }

        tax *= quantity;
        tax = Math.round(tax * 100) / 100;
        var priceTotal = quantity * selectedItemPrice + parseFloat(shipping) + tax;
        priceTotal = Math.round(priceTotal * 100) / 100;
        var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;

        return actions.order.create({
          purchase_units: [{
            description: orderDescription,
            amount: {
              currency_code: 'EUR',
              value: priceTotal,
              breakdown: {
                item_total: {
                  currency_code: 'EUR',
                  value: itemTotalValue,
                },
                shipping: {
                  currency_code: 'EUR',
                  value: shipping,
                },
                tax_total: {
                  currency_code: 'EUR',
                  value: tax,
                }
              }
            },
            items: [{
              name: selectedItemDescription,
              unit_amount: {
                currency_code: 'EUR',
                value: selectedItemPrice,
              },
              quantity: quantity
            }]
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
          
          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = '';
          element.innerHTML = '<h3>GRACIAS POR ADQUIRIR LA SESION</h3>';
         // window.location.href = "compras.php?sesion";
        });
      },
      onError: function(err) {
        console.log(err);
      },
    }).render('#paypal-button-container');
  }
  initPayPalButton();
    </script>
    </div>
  </div>

</section>

      
        
        </main> 
 <?php
   include('footer.php');
   ?>
    
                </body>
                </html>
                <?php
}?>