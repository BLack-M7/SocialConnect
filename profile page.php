<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SocialConnect. | Profile</title>
        <style>
            #bar1{
                height:15px;
                background-color: aliceblue;
                margin-top: -11px;
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
            body{
                background-color: #e0dcd1 ;
                font-family: 'Times New Roman', Times, serif;
            }
            #profile{
                width:1200px;
                height:345px;
                margin:auto;
                background-color: bisque;
                overflow: hidden;
               
            }
            #video{
                width: 1200px;
                height:300px;
                object-fit: cover;
            }
            #text2{
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                text-align: center;
                background-color: #d9dfeb;
                margin-top: -17px;
                height: 28px;
                padding: 8px;
            }
            #pop{
                text-align: center;
                margin-top: -154px;
            }
            #pic2{
                width: 182px;
                height:160px;
                border-radius: 50%;
                border:3px solid whitesmoke;
                margin-top: -42px;
            }
            #zid{
                font-family: "Helvetica Neue", Arial, sans-serif;
                color: #d9dfeb;
                font-weight: bolder;
                font-size: 19px;
                padding: 4px;
            }
            #button{
                width:120px;
                display:inline-block;
                margin:3px;
                padding:5px;
            }
            #body1{
                display: flex;
            }
            #half1{
                flex:3;
                height: 400;
            }
            #half2{
                flex:1;
                height: 400;
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
        <div id="profile">
            <video id="video" autoplay muted loop >
                <source src="video.mp4">
            </video>
            <div id="pop">
                <img id="pic2" src="pic3.jpg"><br>
                <span id="zid">Kelia Ouedraogo</span>
            </div> 
            <br>
            <div id="text2">
                <div id="button">Timeline</div>
                <div id="button">About</div>
                <div id="button">Friends</div>
                <div id="button">Photos</div>
                <div id="button">Videos</div>
                <div id="button">Portfolio</div>
                <div id="button">Settings</div>
            </div>
            <div id="body1">
                <div id="half1"></div>
                <div id="half2"></div>
            </div>
        </div>
    </body>
</html>