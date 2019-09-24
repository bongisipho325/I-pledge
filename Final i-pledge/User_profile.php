<html>
<head>
    <style>
        .wrapper {
            font-family: Arial, Helvetica, sans-serif;

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
            position:fixed;
            right:490px;
            top:50px;
        }

        .Post1{

            border:solid black 2px;
            border-radius: 10px ;
            height:110px;
            width:900px;

        }

        .Posts{
            padding-left: 10px;
            position: fixed;
            right:220px;
            top:60px;
            width:830px;
            height:800px;
            background-color: #BBF9CC;
            overflow-y: scroll;


        }

        .Trending{
            position: fixed;
            left:30px;
            top:60px;
            width:265px;
            height:300px;
            border: solid black;
            background-image: url("Jabu.jpg");
            background-position: center;
            border-radius: 5px;

        }

        .navbar{
            background-color:#333 ;
            height: 48px;
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

        a:link {
            text-decoration: none;
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
            <li><a class="active" href="test.php">Home</a></li>
            <li><a href="local_businesses.php">Operating businesses</a></li>
            <li><a href="#contact">Contact Us</a></li>

        </ul>

        <div class="logo">

        </div>
    </div>

    <div class="Posts">
        <p>Jabu Mavuso</p>
        <p>City: Emalahleni</p>
        <p>Occupation: Unemployed</p>
        <br>
        <h2>Jabu's posts</h2>
    <br>
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
    </div>

    <div class="Trending">


        </div>

    </div>


</body>
</html>