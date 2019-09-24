<html>
<head>
    <title>Pledge Consent</title>
    <style>

        .wrapper{
            width: 100%;
            height:100%;
            background-image: url('back.jpg');
        }

        .button1 {
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

        }

        .Company-info{
            position: fixed;
            right:440px;
            top:60px;
            width:465px;
            height:640px;
            background-color: #BBF9CC;
            overflow-y: scroll;
            border-radius: 5px;


        }
        .Trending1{

            border:solid black;
            height:50px;

        }

        .Trending{
            position: fixed;
            left:10px;
            top:40px;
            width:460px;
            height:650px;
            background-color:#E6E6FA;
            overflow-y: scroll;
            border-radius: 5px;

        }

        .consent-form{

            height:50px;

        }


        .navbar{
            background-color:#333 ;
            height: 48px;
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

            border:solid black;
            height:110px;
            width:600px;

        }

        .Post2{

            border:solid black;
            height:110px;
            width:600px;

        }

        .Post3{

            border:solid black;
            height:110px;
            width:600px;

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

    <div class="Company-info">
        <div class="consent-form">
            <h1>Pledge Consent</h1>
            <br>
            <h2>Dear User</h2>
            <p>You are acknowledging that whoever comes up with a proposed solution will gain your monetary and citezen support</p>
            <p>in addition to our regular municipal services, by pledging you are acknowledging your contribution making this idea possible</p>
            <p>Yours Sincerely</p>
            <p>i-Pledge group</p>
            <form>
                <input type="checkbox" name="letters" value="a">I agree
            </form>

            <a href="pay.php" class="button1">Next</a>

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
</div>
</body>
</html>