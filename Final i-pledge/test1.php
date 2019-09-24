
<html>
<head>
    <style>
        a:link {
            text-decoration: none;
        }

        .wrapper {
            font-family: Arial, Helvetica, sans-serif;

        }

        input[type=text] {
            height:80px;
            width:300px;
            border:solid black 2px;
            border-radius: 10px ;

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
            border-radius: 10px ;
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

        .button2 {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 30px 50px 30px; 30px;
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
            height:110px;
            width:900px;

        }

        .Post2{

            border:solid black 2px;
            border-radius: 10px ;
            height:190px;
            width:900px;

        }

        .Post3{

            border:solid black 2px;
            border-radius: 10px ;
            height:170px;
            width:900px;
        }

        .Post4{

            border:solid black 2px;
            border-radius: 10px ;
            height:110px;
            width:900px;
        }

        .Post5{

            border:solid black 2px;
            border-radius: 10px ;
            height:110px;
            width:900px;
        }

        .Post6{

            border:solid black 2px;
            border-radius: 10px ;
            height:110px;
            width:900px;

        }

        .Post0{

            border:solid black 2px;
            border-radius: 10px ;
            height:110px;
            width:900px;


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

        .Inno_Funds{

            border:solid black;
            height:50px;
            width: 150px;
            position:relative;
            right: 0;
            top:0;

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


        .bakkie{

            height:70px;
            width:90px;
            padding-left: 10px;
        }

    </style>
</head>
<body>

<div class="wrapper">
    <div class="navbar">
        <ul>
            <li><a class="active" href="test.php">Home</a></li>
            <li><a href="local_businesses.php">Operating businesses</a></li>
            <li><a href="#contact">Contact Us</a></li>

        </ul>

        <div class="logo">

        </div>
    </div>
    <div class="Posts">
        <form>
            <input type="text" id="fname" name="fname" placeholder="Experienced any service delivery issues lately??">
            <a href="test1.php" class="button">Post</a>
        </form>
        <div class="Post0">
            <a href="User_profile.php"> Jabu Hadebe</a>
            <br>
            <br>
            Test paragraph. Other text
            <br>
            <br>
            <a href="Pledge.php" class="button1">Pledge</a>
            <a href="Share.php" class="button1">Share</a>
            <a href="Innovate.php" class="button1">Innovate</a>
        </div>
        <div class="Post1">
            <a href="User_profile.php"> Jabu Hadebe</a>
            <br>
            <br>
            The electricity at Zone 6 Soweto has been out for the past few days and people are really struggling to cope
            <br>
            <br>
            <a href="Pledge.php" class="button1">Pledge</a>
            <a href="Share.php" class="button1">Share</a>
            <a href="Innovate.php" class="button1">Innovate</a>
        </div>

        <div class="Post2">
            <a href="#"> Sibongile Mbatha</a>

            <br>
            <br>
            <img src="burst-pipe.jpg" class="bakkie" alt="Alps">
            <br>
            Burst water pipe at Newtown junction: 06:45am
            <br>
            <br>
            <a href="Pledge.php" class="button1">Pledge</a>
            <a href="Share.php" class="button1">Share</a>
            <a href="Innovate.php" class="button1">Innovate</a>
        </div>

        <div class="Post3">
            <a href="#">Lerato Kganyago</a>

            <br>
            <br>
            The Induna community in Kwamhlanga lives next to a fresh water spring .2KM west is the Cape Gate community which is plagued
            by a lot of water shedding.Sipho from Induna has a bakkie and would like to aid the Cape Gate community by transporting the spring water to
            them
            <br>
            <br>
            <a href="Pledge.php" class="button1">Pledge</a>
            <a href="Share.php" class="button1">Share</a>
            <a href="Innovate.php" class="button1">Innovate</a>
        </div>

        <div class="Post4">
            <a href="#">Shadrack Muthivhi</a>

            <br>
            <br>
            The citezens of Madadeni are tired of buying expensive building material in town
            <br>
            <br>
            <a href="Pledge.php" class="button1">Pledge</a>
            <a href="Share.php" class="button1">Share</a>
            <a href="Innovate.php" class="button1">Innovate</a>
        </div>
    </div>

    <div class="Trending">
        <h2>Trending</h2>
        <div class="company">
            <h3>Bakkie-Treasure</h3>>

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


</body>
</html>