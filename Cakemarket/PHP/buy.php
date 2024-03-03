<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <meta name="robots" content="noindex,follow" />
    <style>
        body {
            background-image: url(../images/tablebackground2.jpg);
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

    
        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
            display: grid;
            justify-items: center;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background:#ffb3ba;
            padding: 5px 20px 15px 20px;
            border: 3px solid #fc6676;
            border-radius: 3px;
            width: 60%;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #f2f2f2;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #fc6676;
            color: #f2f2f2;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #fc6676;
            box-shadow: 2px 2px 5px 2px  #f2f2f2;

        }

        a {
            color: #f2f2f2;
        }

        hr {
            border: 1px solid #fc6676;
        }

        span.price {
            float: right;
            color: #f2f2f2;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
<?php 


session_start();
$email = $_SESSION['email'];
$countt = $_SESSION['count'];

?>
<h3><br></h3>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="buyAction.php" method="post">
                <div class="row">
                    <div class="col-50">
                    
                        <h3 style="color:  #f2f2f2;font-weight: Bold">Your information to complete checkout </h3>
                        <label for="fname" style="color:  #f2f2f2"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe" >
                        <label for="email" style="color:  #f2f2f2"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">
                        <label for="adr" style="color:  #f2f2f2"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="address" name="address" placeholder="542 W. 15th Street">
                        <label for="date" style="color:  #f2f2f2"><i class="fa fa-institution"></i> Date</label>
                        <input type="date" id="date" name="date" placeholder=""> 

                        <div class="row">
                            <div class="col-50">
                                <label for="state" style="color: #f2f2f2">State</label>
                                <input type="text" id="state" name="state" placeholder="NY">
                            </div>
                            <div class="col-50">
                                <label for="zip" style="color: #f2f2f2">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="10001">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3 style="color:  #f2f2f2">Payment </h3>
                        <label for="fname" style="color:  #f2f2f2">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:#fc6676;"></i>
                            <i class="fa fa-cc-amex" style="color:#fc6676;"></i>
                            <i class="fa fa-cc-mastercard" style="color:#fc6676;"></i>
                            <i class="fa fa-cc-discover" style="color:#fc6676;"></i>
                        </div>
                        <label for="cname" style="color:  #f2f2f2">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum" style="color:  #f2f2f2">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth" style="color:  #f2f2f2">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear" style="color:  #f2f2f2">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2023">
                            </div>
                            <div class="col-50">
                                <label for="cvv" style="color:  #f2f2f2">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn" name="submit" onclick="location.href='buyAction.php'">
            </form>
        </div>
    </div>
    
</div>

<script type="text/javascript">
    $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 1) {
            value = value- 1;
        } else {
            value = 0;
        }

        $input.val(value);

    });

    $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
            value = value + 1;
        } else {
            value =100;
        }

        $input.val(value);
    });
   function totalproductprice(p1, p2) {
        return p1 * p2;
    }
    let num1 = document.getElementById("num").value;
    let num2 = document.getElementById("price1").value;
    let result = totalproductprice(num1 , num2);
    document.getElementById("demo").innerHTML = num1;

</script>
<p id="hi"></p>

</body>
</html>
