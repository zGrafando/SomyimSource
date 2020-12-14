<?php
    session_start();
?>
<DOCTYPE! html>    
    <html lang="de-CH">
        <head>
            <meta charset="utf-8">
            <title>Memory of Somyim</title>
            <link rel="stylesheet" href="styles.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
            <style>
            
                .tab {
                  overflow: hidden;
                  border: 1px solid #ccc;
                  background-color: #f1f1f1;
                }

                .tab button {
                  background-color: inherit;
                  float: left;
                  border: none;
                  outline: none;
                  cursor: pointer;
                  padding: 14px 16px;
                  transition: 0.3s;
                }

                .tab button:hover {
                  background-color: #ddd;
                }

                .tab button.active {
                  background-color: #ccc;
                }

                .tabcontent {
                  display: none;
                  padding: 6px 12px;
                  border: 1px solid #ccc;
                  border-top: none;
                }
                a{ text-decoration: none;
                }
                div{    text-align: center;
                        margin: auto;
                }
                
                .FeedTopLayout1 {
                    width: 100%;
                    height: 300px;
                    display: block;
                    margin: auto;
                    text-align: center;
                }
                
                .Tang {
                    font-size: 190px;
                    color: #FFFFFF;
                    text-align: center;
                    font-family: 'Tangerine', serif;
                }
                
                .tin {
                    font-family: 'Tangerine', serif;
                }
                .FeedTopOrange {
                    font-family: 'Tangerine', serif;
                    font-size: 190px;
                    color: #FFA07A;
                    color: #FF7F50;
                }
                .dd{
                    font-size: 160px;
                    color: #FFFFFF;
                    font-family: 'Tangerine', serif;
                }
            </style>
            
        </head>
        
<?php
    if(!isset($_COOKIE['PHPSESSID'])){
        session_start();    //start the session
    }
?>
        
        <body class="BodyBackground" style="max-height: 600px;">
            <section class="titleSectionBackground" style="margin-bottom: 0px;">
                <div id="Titelsequence" class="titlesequenceTop">
                    <a href="somyim.html" style="text-decoration: none"><p class="dd">Somyim</p></a>
                    <p></p>
                </div>

                <nav id="Navbar" class="Navigation" style="margin-bottom: 0px;">
                    <ul>
                        <li><a href="UnsereThaimassage.html" style="text-decoration: none">About</a></li>
                        <li><a href="SomyimServices.html" style="text-decoration: none">Services</a></li>
                        <li><a href="SomyimContact.html" style="text-decoration: none">Kontakt</a></li>
                        <li><a href="SomyimBooking.php" style="text-decoration: none">Booking</a></li>
                        <li class="Border"><a href="SomyimGallery.php" style="text-decoration: none">Gallery</a></li>
                    </ul>
                </nav>
            </section>
            
            <section class="FeedTopContainer" style="margin-top: 0px;">
                <div style="margin-bottom: 0px;">
                    <p class="UTSectionTitleParagraph" style="margin-top: 0px;"> == Booking == </p>
                    <img src="logo/wheel-17.jpg" alt="Logo" style="width: 200px; height:200px;  margin-bottom: 30px;">
                </div>
                <div class="UTContent" style="background-color: #FFFFFF; margin-bottom: 10px; margin-top: 0;">
                    <p class="UTContentParagraph">
                        Erreichen Sie uns rund um die Uhr, per E-mail oder Telefon.
                    </p>
                </div>
            </section>
            <section class="UTContent" style="margin-top: 0px; min-height: 500px;">
                <div class="tab">
                    <button class="tablinks" onclick="openDirectory(event, 'Login', 'FirstPage')">Login</button>
                    <button class="tablinks" onclick="openDirectory(event, 'Register', 'FirstPage')">Register</button>
                </div>
                
                <script>
                    function openDirectory(evt, TabName, FirstTab){
                        var i, tabcontent, tablinks;
                        
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++){
                            tabcontent[i].style.display = "none";
                        }
                        
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++){
                            tablinks[i].className = tablinks[i].className.replace(" active","");
                        }
                        
                        document.getElementById(TabName).style.display = "block";
                        document.getElementById(FirstTab).style.display = "none";
                        evt.currentTarget.className += " active";
                    }
                </script>
                
                <div id="FirstPage">
                    <p>To book a massage, you must first log in, if you have a user-account, or register</p>
                    <p onclick="openDirectory(event, 'Login', 'FirstPage')"> Login -> </p>
                    <p onclick="openDirectory(event, 'Register', 'FirstPage')"> Register -> </p>
                </div>
<?php
        include 'Login.html';
        include 'Register.html';
?>
    </html>

        
