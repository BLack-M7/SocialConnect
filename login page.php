<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SocialConnect. | login</title>
        <style>
            #box {
                height:100px;
                background-color: #3c5a98;
                color : whitesmoke;
                padding : 5px;
            }
            #cc {
                font-size : 38px;
                font-style : oblique;
            }
            #signup_button {
                font-style: oblique;
                background-color: #4CAF50;
                font-family:Arial, Helvetica, sans-serif;
                width: 4%;
                text-align: center;
                padding :2px;
                border-radius: 6px;
                float:right;
                margin-top: 20px;
                margin-right: 10px;
            }
            #main {
                background-color:lavender;
                width: 650px;
                height : 250px;
                margin:auto;
                margin-top: 160px;
                text-align: center;
                padding-top:50px;
                font-family:Verdana, Geneva, Tahoma, sans-serif;
            }
            body {
                background-color: aliceblue;
            }
            #email{
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                height: 33px;
                width:300px;
                border: #3c5a98;
                border-radius:6px;
                padding:6px;
                font-weight: 700;
            }
            #password{
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                height: 33px;
                width:300px;
                border: #3c5a98;
                border-radius:6px;
                padding: 6px;
                font-weight: 700;
            }
            #button{
                height: 33px;
                width:100px;
                background-color: #3c5a98;
                text-align: center;
                border-radius: 4px;
                font-weight: bold;
                border:none;
                margin-top: 7px;
                color:lavenderblush;
            }
        </style>
    </head>
    <body>
        <div id="box">
            <div id="cc">SocialConnect.</div>
            <div id="signup_button">Sign up</div>
        </div>
        <div id="main">
            Log in to SocialConnect.<br><br>
            <?php
            /*$email = isset($_POST["email"]) ? $_POST["email"] :'';
            $password = isset($_POST["password"]) ? $_POST["password"] :'';*/
            ?>
            <form>
                <input type="text" id="email" placeholder="email"><br><br>
                <input type="password" id="password" placeholder="password"><br><br>
                <input type="submit" id="button" value="Log in"><br><br>
            </form>
        </div>
    </body>
</html>