
<?php

$stripe = [
    'publishable' => 'pk_test_XUnvtG42eCjI5sgSpJNywHIy',
    'private' => 'sk_test_LQTORCPjerFLMFBaHZQWUZxp'
]
?>

<html>
<head>
    <style>

        .wrapper{
            width: 100%;
            height:100%;
            background-image: url('back.jpg');
        }

        .navbar{
            background-color:#333 ;
            height: 48px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top:10px;
            right:0;

        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }

        .logo{

            z-index: 1;
            background-image: url("i-pledge.png");
            background-position: center;
        }

    </style>

</head>

    <body>
    <div class="wrapper">

        <div class="navbar">
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="local_businesses.php">Operating businesses</a></li>
                <li><a href="#contact">Contact Us</a></li>

            </ul>

            <div class="logo">

            </div>
        </div>
        <br>


        <form action="charge.php" method="post">
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="<?php echo $stripe['publishable']; ?>"
                    data-description="Access for a year"
                    data-currency="ZAR"
                    data-amount="5000"
                    data-locale="auto"></script>
        </form>
    </div>
    </body>

</html>