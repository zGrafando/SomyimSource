<DOCTYPE! html>    
    <html lang="de-CH">
        <head>
            <meta charset="utf-8">
            <title>Memory of Somyim</title>
            <link rel="stylesheet" href="styles.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
                .Albo{
                    min-width: 150px;
                    max-width: 150px;
                    min-height: 150px;
                    max-height: 150px;
                    justify-content: center;
                    align-items: center;
                    margin: 2px;
                }
                .WeekDesc{
                    max-width: 300px;
                    min-width: 300px;
                    max-height: 150px;
                    min-height: 150px;
                    font-size: 22px;
                    text-align: center;
                    margin-bottom: 1px;
                    margin-top: 1px;
                    
                }
                .Weekband{
                    display: flex;
                    flex-direction: row;
                }
            
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
    
    if(isset($_POST['SendType'])){
        $_SESSION['WantedMassagetype'] = $_POST['SendType'];
    }

    if (isset($_POST['WeiterVor']) || isset($_POST['WeiterRück'])){
            if (isset($_POST['WeiterVor'])){
                $CounterMonth = $_POST['WeiterVorValue'];
            }
            else{
                $CounterMonth = $_POST['WeiterRückValue'];
            }
            $varTSD = date("Y-m-d");
            function _getFirstWeekdayInMonth($Month){
                $varDay = date("d");
                $varYear = date("Y");
                $calDate = $varYear."-".$Month."-".$varDay;
                return date('w',strtotime($calDate));
            }
            
            $provStartDayofMonth = _getFirstWeekdayInMonth($CounterMonth);
            $StartDayofMonth = $provStartDayofMonth;
            $CurrYear = date("Y");
            if ($CounterMonth == 12){
                $WeitergebenVor = 1;
            }else{
                $WeitergebenVor = 1 + intval($CounterMonth);
            }
            if ($CounterMonth == 1){
                $WeitergebenRück = 12;
            }else{
                $WeitergebenRück = intval($CounterMonth) - 1;
            }
            
?>
        <body class='BodyBackground' style='max-height: 600px;' onLoad="window.scroll(0,1000)">
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
  
            <section class="Calendar" style="max-width:1500px; margin: auto; display: flex; flex-direction: row;">
<?php
    include 'BookingBody.php';
?>
<?php
    }
    else{        
        if (isset($_POST['Day1']) || isset($_POST['Day2']) || isset($_POST['Day3']) || isset($_POST['Day4']) || isset($_POST['Day5']) 
            || isset($_POST['Day6']) || isset($_POST['Day7']) || isset($_POST['Day8']) || isset($_POST['Day9']) || isset($_POST['Day10'])
            || isset($_POST['Day11']) || isset($_POST['Day12']) || isset($_POST['Day13']) || isset($_POST['Day14']) || isset($_POST['Day15'])
            || isset($_POST['Day16']) || isset($_POST['Day17']) || isset($_POST['Day18']) || isset($_POST['Day19']) || isset($_POST['Day20'])
            || isset($_POST['Day21']) || isset($_POST['Day22']) || isset($_POST['Day23']) || isset($_POST['Day24']) || isset($_POST['Day25'])
            || isset($_POST['Day26']) || isset($_POST['Day27']) || isset($_POST['Day28']) || isset($_POST['Day29']) || isset($_POST['Day30'])
            || isset($_POST['Day31'])){
?>
                <body class='BodyBackground' style='max-height: 600px;'>
 
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
            
                    <section style="background-color: #FFFFFF; max-width: 600px; min-width: 60%; margin: auto; margin-top: 50px;">
                        <div class="TimeTableConc" style="max-height: 950px; display: flex; flex-direction: row; max-width: 700px;">
<?php
                $Year = date("Y");
                
                if (isset($_SESSION['NewCounterMonth'])){
                    $Month = $_SESSION['NewCounterMonth'];
                }
                else{
                    $Month = date("m");
                }

                if(isset($_POST['Day1'])){
                    $Day = $_POST['Day1'];
                }else{
                    if(isset($_POST['Day2'])){
                        $Day = $_POST['Day2'];
                    }else{
                        if(isset($_POST['Day3'])){
                            $Day = $_POST['Day3'];
                        }else{
                            if(isset($_POST['Day4'])){
                                $Day = $_POST['Day4'];
                            }else{
                                if(isset($_POST['Day5'])){
                                    $Day = $_POST['Day5'];
                                }else{
                                    if(isset($_POST['Day6'])){
                                        $Day = $_POST['Day6'];
                                    }else{
                                        if(isset($_POST['Day7'])){
                                            $Day = $_POST['Day7'];
                                        }else{
                                            if(isset($_POST['Day8'])){
                                                $Day = $_POST['Day8'];
                                            }else{
                                                if(isset($_POST['Day9'])){
                                                    $Day = $_POST['Day9'];
                                                }else{
                                                    if(isset($_POST['Day10'])){
                                                        $Day = $_POST['Day10'];
                                                    }else{
                                                        if(isset($_POST['Day11'])){
                                                            $Day = $_POST['Day11'];
                                                        }else{
                                                            if(isset($_POST['Day12'])){
                                                                $Day = $_POST['Day12'];
                                                            }else{
                                                                if(isset($_POST['Day13'])){
                                                                    $Day = $_POST['Day13'];
                                                                }else{
                                                                    if(isset($_POST['Day14'])){
                                                                        $Day = $_POST['Day14'];
                                                                    }else{
                                                                        if(isset($_POST['Day15'])){
                                                                            $Day = $_POST['Day15'];
                                                                        }else{
                                                                            if(isset($_POST['Day16'])){
                                                                                $Day = $_POST['Day16'];
                                                                            }else{
                                                                                if(isset($_POST['Day17'])){
                                                                                    $Day = $_POST['Day17'];
                                                                                }else{
                                                                                    if(isset($_POST['Day18'])){
                                                                                        $Day = $_POST['Day18'];
                                                                                    }else{
                                                                                        if(isset($_POST['Day19'])){
                                                                                            $Day = $_POST['Day19'];
                                                                                        }else{
                                                                                            if(isset($_POST['Day20'])){
                                                                                                $Day = $_POST['Day20'];
                                                                                            }else{
                                                                                                if(isset($_POST['Day21'])){
                                                                                                    $Day = $_POST['Day21'];
                                                                                                }else{
                                                                                                    if(isset($_POST['Day22'])){
                                                                                                        $Day = $_POST['Day22'];
                                                                                                    }else{
                                                                                                        if(isset($_POST['Day23'])){
                                                                                                            $Day = $_POST['Day23'];
                                                                                                        }else{
                                                                                                            if(isset($_POST['Day24'])){
                                                                                                                $Day = $_POST['Day24'];
                                                                                                            }else{
                                                                                                                if(isset($_POST['Day25'])){
                                                                                                                    $Day = $_POST['Day25'];
                                                                                                                }else{
                                                                                                                    if(isset($_POST['Day26'])){
                                                                                                                        $Day = $_POST['Day26'];
                                                                                                                    }else{
                                                                                                                        if(isset($_POST['Day27'])){
                                                                                                                            $Day = $_POST['Day27'];
                                                                                                                        }else{
                                                                                                                            if(isset($_POST['Day28'])){
                                                                                                                                $Day = $_POST['Day28'];
                                                                                                                            }else{
                                                                                                                                if(isset($_POST['Day29'])){
                                                                                                                                    $Day = $_POST['Day29'];
                                                                                                                                }else{
                                                                                                                                    if(isset($_POST['Day30'])){
                                                                                                                                        $Day = $_POST['Day30'];
                                                                                                                                    }else{
                                                                                                                                        if(isset($_POST['Day31'])){
                                                                                                                                            $Day = $_POST['Day31'];
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                $StringedDate = $Year.'-'.$Month.'-'.$Day;
                $_SESSION['BookedDate'] = $StringedDate;
                
                $dbServername = "localhost";
                $dbUsername = "zGrafando";
                $dbPassword = "Nbiwe!12";
                $dbName = "SomyimData";
                $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                if ($conn-> connect_error){
                    die("Connection to Database failed: ".$conn -> connect_error);
                }
                $SqlQuery = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$StringedDate'");
                $SqlQuery->execute();
                $r = $SqlQuery->get_result();
                $result = $r->fetch_array(MYSQLI_ASSOC);
                
?>
                            <div>
                                
                            </div>
                            <div class="TimeTableDesc" style="margin: 20px;">   
                                <div style="max-height: 150px; min-height: 150px; max-width: 150px; min-width: 150px; background-color: #F0F8FF;"><p>9:00 - 10:00</p></div>
                                <div style="max-height: 150px; min-height: 150px; max-width: 150px; min-width: 150px; background-color: #F0F8FF;"><p>10:30 - 11:30</p></div>
                                <div style="max-height: 150px; min-height: 150px; max-width: 150px; min-width: 150px; background-color: #F0F8FF;"><p>Mittagspause</p></div>
                                <div style="max-height: 150px; min-height: 150px; max-width: 150px; min-width: 150px; background-color: #F0F8FF;"><p>13:00 - 14:00</p></div>
                                <div style="max-height: 150px; min-height: 150px; max-width: 150px; min-width: 150px; background-color: #F0F8FF;"><p>14:30 - 15:30</p></div>
                                <div style="max-height: 150px; min-height: 150px; max-width: 150px; min-width: 150px; background-color: #F0F8FF;"><p>16:00 - 17:00</p></div>
                            </div>
                            <div class="TimeTableDesc" style="max-width: 400px; margin-top: 20px; margin-left: 0px;">
<?php
                                echo"<form action='somyim.html' method='Post'>";
                                    if(!empty($result['T1'])){
                                        echo"<input type='submit' name='Termin1' id='T1' value='Termin 1' disabled='diabled' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #A9A9A9;'>";
                                    }else{
                                        echo"<input type='submit' name='Termin1' id='T1' value='Termin 1' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #F5F5DC;'>";
                                    }
                                    if(!empty($result['T2'])){
                                        echo"<input type='submit' name='Termin2' id='T2' value='Termin 2' disabled='disabled' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #A9A9A9; margin-top: 3px;'>";
                                    }else{
                                        echo"<input type='submit' name='Termin2' id='T2' value='Termin 2' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #F5F5DC; margin-top: 3px;'>";
                                    }
                                    echo"<input type='submit' name='Mittagspause' id='M' value='' disabled='disabled' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #F5F5DC; margin-top: 3px;'>";
                                    if(isset($_POST['T3'])){
                                        echo"<input type='submit' name='Termin3' id='T3' value='Termin 3' disabled='disabled' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #A9A9A9; margin-top: 3px;'>";
                                    }else{
                                        echo"<input type='submit' name='Termin3' id='T3' value='Termin 3' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #F5F5DC; margin-top: 3px;'>";
                                    }
                                    if(isset($_POST['T4'])){
                                        echo"<input type='submit' name='Termin4' id='T4' value='Termin 4' disabled='disabled' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #A9A9A9; margin-top: 3px;'>";
                                    }else{
                                        echo"<input type='submit' name='Termin4' id='T4' value='Termin 4' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #F5F5DC; margin-top: 3px;'>";
                                    }
                                    if(isset($_POST['T5'])){
                                        echo"<input type='submit' name='Termin5' id='T5' value='Termin 5' disabled='disabled 'style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #A9A9A9; margin-top: 3px;'>";
                                    }else{
                                        echo"<input type='submit' name='Termin5' id='T5' value='Termin 5' style='max-height: 150px; min-height: 150px; max-width: 350px; min-width: 350px; background-color: #F5F5DC; margin-top: 3px;'>";
                                    }
                                echo"</form>";
?>
                            </div>
                        </div>
                    </section>
<?php
        }
        else{
            
            $varTSD = date("Y-m-d");
            if (isset($_SESSION['NewCounterMonth'])){
                $CounterMonth = $_SESSION['NewCounterMonth'];
            }
            else{
                $CounterMonth = date("m");
            }

            
            function _getFirstWeekdayInMonth($Month){
                $varDay = date("d");
                $varYear = date("Y");
                $calDate = $varYear."-".$Month."-".$varDay;
                return date('w',strtotime($calDate));
            }
            
            $provStartDayofMonth = _getFirstWeekdayInMonth($CounterMonth);
            $StartDayofMonth = $provStartDayofMonth;
            $CurrYear = date("Y");
            if ($CounterMonth == 12){
                $WeitergebenVor = 1;
            }else{
                $WeitergebenVor = 1 + intval($CounterMonth);
            }
            if ($CounterMonth == 1){
                $WeitergebenRück = 12;
            }else{
                $WeitergebenRück = intval($CounterMonth) - 1;
            }
            
    include 'BodyBooking.html';
    include 'BookingBody.php';
        }
    }
?>