<DOCTYPE! html>    
    <html lang="de-CH">
        <head>
            <meta charset="utf-8">
            <title>Memory of Somyim</title>
            <link rel="stylesheet" href="styles.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
            <style>
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
        <body class="BodyBackground">
            <section class="titleSectionBackground">
                <div id="Titelsequence" class="titlesequenceTop">
                    <a href="somyim.html" style="text-decoration: none"><p class="dd">Somyim</p></a>
                    <p></p>
                </div>

                <nav id="Navbar" class="Navigation">
                    <ul>
                        <li><a href="UnsereThaimassage.html" style="text-decoration: none">About</a></li>
                        <li><a href="SomyimServices.html" style="text-decoration: none">Services</a></li>
                        <li><a href="SomyimContact.html" style="text-decoration: none">Kontakt</a></li>
                        <li><a href="SomyimBooking.php" style="text-decoration: none">Booking</a></li>
                        <li class="Border"><a href="SomyimGallery.php" style="text-decoration: none">Gallery</a></li>
                    </ul>
                </nav>
            </section>

            <script>
                window.onscroll = function() {ChangeNavigationAndTitle};
                
                var navbar = document.getElementById("Navbar");
                var RickStick = Navbar.offsetTop;
                
                function ChangeNavigationAndTitle() {
                    if (window.pageYOffset >= RickStick){
                        Navbar.classList.add("sticky")
                        Navbar.classList.remove("titlesequenceTop")
                        Navbar.classList.add("titlesequenceScroll")
                    }
                    else{
                        Navbar.classList.remove("sticky")
                        Navbar.classList.remove("titlesequenceScroll")
                        Navbar.classList.add("titlesequenceTop")
                    }
                    
                    
                }
            </script>
            
            
            <section class="FeedTopContainer">
                <div>
                    <p class="UTSectionTitleParagraph"> == Contact == </p>
                    <img src="logo/wheel-17.jpg" alt="Logo" style="width: 200px; height:200px; margin-bottom: 30px;">
                </div>
                <div class="UTContent" style="background-color: #FFFFFF; margin-bottom: 10px;">
                    <p class="UTContentParagraph">
                        Erreichen Sie uns rund um die Uhr, per E-mail oder Telefon.
                    </p>
                </div>
                
                <div class="UTContent">
                
                    
                </div>
                    
            </section>

            
        </body>
    </html>