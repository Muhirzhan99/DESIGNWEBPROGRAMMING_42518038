<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.poliupg.ac.id/commons/apple-touch-icon.png">

    <title>FORM</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="bg-light">
    </br>

    <div id="result">
    <div class="container">
        <div class="col-md-8 order-md-1 container">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" id="formku" action="proses.php" method="post" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label> 
                <input type="text" name="firstname" class="form-control" id="firstName" placeholder="" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" name="lastname" class="form-control" id="lastName" placeholder="" value="" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" name="address2" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" name="country" id="country" required>
                  <option value="">Choose...</option>
                  <option>Indonesia</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" name="state" id="state" required>
                  <option value="">Choose...</option>
                  <option>Sulawesi Selatan</option>
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" name="zip" class="form-control" id="zip" placeholder="" required>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="billing[]" value="sameaddress" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="billing[]" value="saveinfo" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" value="creditcard" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" value="debitcard" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" value="paypal" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" name="namecard" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" name="creditnum" class="form-control" id="cc-number" placeholder="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" name="expiration" class="form-control" id="cc-expiration" placeholder="" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" name="cvv" class="form-control" id="cc-cvv" placeholder="" required>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
          <div id="hasil"></div>
          <?php //include "proses.php";?>
        </div>
      </div>
    </div>
      </br>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script>
    $("#formku").submit(tangani);//komentar bagian ini agar syncronous yang berjalan
    function tangani(e){
    //kalau fungsi serialize outputnya string dengan format x-www-form-urlencoded, contoh lihat di div result di atas
		var strformencoded = $("#formku").serialize();
		//$("#result").text(strformencoded);
    
    //kalau pakai fungsi serializeArray outputnya array of record - contoh lihat di console
		var arrayform = $("#formku").serializeArray();
		console.log(arrayform);
    
    $.post("proses.php",{dataku : strformencoded}, function(output){ 
      //tulis kodemu di sini
      alert(output);
      $("#hasil").html(output);
    });
    
    return false;
    }
    </script>

  </body>
</html>
