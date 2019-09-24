<html>
<head>
    <style>
        a:link {
            text-decoration: none;
        }

        .wrapper{
            width: 100%;
            height:100%;

        }

        input[type=text] {
            height:60px;
            width:300px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;

            right:490px;
            top:60px;
        }

        .button1 {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;


        }

        .Posts{
            padding-left: 10px;
            position: fixed;
            right:10px;
            top:60px;
            width:880px;
            height:640px;
            background-color: #BBF9CC;
            overflow-y: scroll;


        }

        .Trending{
            position: fixed;
            left:0;
            top:60px;
            width:465px;
            height:640px;
            background-color:#E6E6FA;
            overflow-y: scroll;
            border-radius: 5px;

        }

        .Post1{

            border:solid black 2px;
            border-radius: 10px ;
            height:200px;
            width:900px;

        }

        .Post2{

            border:solid black 2px;
            border-radius: 10px ;
            height:200px;
            width:900px;

        }

        .Post3{

            border:solid black 2px;
            border-radius: 10px ;
            height:200px;
            width:900px;

        }

        .Post4{

            border:solid black;
            height:110px;
            width:600px;

        }

        .Post5{

            border:solid black;
            height:110px;
            width:600px;

        }

        .Post6{

            border:solid black;
            height:110px;
            width:600px;

        }

        .Pledges{

            border:solid #cc1122;
            height:50px;
            width: 150px;
            position: fixed;
            left:0px;
            text-align: center;
            padding-top: 30px;
            border-radius: 20px;
        }

        .Donations{

            border:solid #cc1122;
            height:50px;
            width: 150px;
            position: fixed;
            right:930px;
            text-align: center;
            padding-top: 30px;
            border-radius: 20px;


        }

        .heading1{

            position: fixed;
            left:50px;
            padding-top:10px;

        }

        .heading2{
            position: fixed;
            right:970px;
            padding-top:10px;

        }


        .Trending1{

            border:solid black;
            height:50px;

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

        a.active {
            background-color: #4CAF50;
        }

        .logo{

            z-index: 1;
            background-image: url("i-pledge.png");
            background-position: center;
        }

        .bakkie{

            height:90px;
            width:110px;
            padding-left: 20px;
        }

    </style>
</head>
<body>

<div class="wrapper">
    <div class="navbar">
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="#news">Operating businesses</a></li>
            <li><a href="#contact">Contact Us</a></li>

        </ul>

        <div class="logo">

        </div>
    </div>
    <div class="Posts">
        <h2>Local Businesses</h2>
        <br>
        <a href="Innovate.php" class="button1">Innovate</a>
        <div class="Post1">
            <a href="company_profile.php"> Bakkie-Treasure</a>
            <br>
            <br>
            <img src="np200.jpg" class="bakkie" alt="Alps">
            <br>
            <br>
            <a href="company_profile.php" class="button1">Pledge</a>

        </div>

        <div class="Post2">
            <a href="#"> Dig-It</a>

            <br>
            <br>
            <img src="dig-it.jpg" class="bakkie" alt="Alps">
            <br>
            <br>
            <a href="Pledge_pay.php" class="button1">Pledge</a>

        </div>

        <div class="Post3">
            <a href="#">Share Water</a>

            <br>
            <br>
            <img src="water share.jpg" class="bakkie" alt="Alps">
            <br>
            <br>
            <a href="Pledge.php" class="button1">Pledge</a>

        </div>



    </div>

    <div class="Trending">
        <h2>Trending</h2>
        <div class="company">
            <h3>Bakkie-Treasure</h3>

            <span class="heading1">
                Pledges
            </span>

            <span class="heading2">
                Donations
            </span>


            <span class="Pledges">
                3.4K Pledges

            </span>

            <span class="Donations">

                R63K Raised
            </span>
        </div>

        <br>
        <br>
        <br>
        <br>
        <h3>Dig-it</h3>

        <div class="company">
            <h3> </h3>>

            <span class="heading1">
                Pledges
            </span>

            <span class="heading2">
                Donations
            </span>


            <span class="Pledges">
                2.1K Pledges

            </span>

            <span class="Donations">

                R81K Raised
            </span>
        </div>

        <br>
        <br>
        <br>
        <h3>Share-Water</h3>

        <div class="company">
            <h3> </h3>>

            <span class="heading1">
                Pledges
            </span>

            <span class="heading2">
                Donations
            </span>


            <span class="Pledges">
                315 Pledges

            </span>

            <span class="Donations">

                R7K Raised
            </span>
        </div>

    </div>
    </div>


    </div>



</body>
</html>