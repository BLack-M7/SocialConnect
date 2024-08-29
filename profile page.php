<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SocialConnect. | Profile</title>
        <style>
            #bar1{
                height:15px;
                background-color: aliceblue;
            }
            #bar2{
                height:50px;
                background-color:#3c5a98;
                color:#d9dfeb;
            }
            #bar3{
                width:1200px;
                margin:auto;
                font-size:x-large;
                padding:10px;
                font-style: oblique;
            }
            #search{
                width:310px;
                padding:4px;
                border-radius: 3px;
                border:none;
                border-color: bisque;
                background-image: url("search3.png");
                background-repeat:no-repeat;
                background-position: right;
            }
            #search::placeholder{
                padding:5px;
                font-family:'Times New Roman', Times, serif;
                font-weight:lighter;
                font-size:16px;
                opacity:45%;
            }
            #pic{
                width: 50px;
                float: right;
                height:40px;
                margin-top: -8px;
                padding:4px;
            }
        </style>
    </head>
    <body>
        <div id ="bar1">
        </div> 
        <div id="bar2">
            <div id ="bar3">
                SocialConnect.&nbsp<input type="text" id="search" placeholder="Search for friends">
                <img id="pic" src="pic3.jpg">
            </div>
        </div>
    </body>
</html>