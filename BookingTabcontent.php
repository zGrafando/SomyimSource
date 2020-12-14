<div>
<?php
                        
                        
                        if ($CounterMonth == 1){
                            $StartDayofMonth = 3;
                            $MonthName = 'Januar';
                        }
                        if ($CounterMonth == 2){
                            $StartDayofMonth = 6;
                            $MonthName = 'Februar';
                        }
                        if ($CounterMonth == 3){
                            $StartDayofMonth = 0;
                            $MonthName = 'März';
                        }                        
                        if ($CounterMonth == 4){
                            $StartDayofMonth = 3;
                            $MonthName = 'April';
                        }                        
                        if ($CounterMonth == 5){
                            $StartDayofMonth = 5;
                            $MonthName = 'Mai';
                        }                        
                        if ($CounterMonth == 6){
                            $StartDayofMonth = 1;
                            $MonthName = 'Juni';
                        }                        
                        if ($CounterMonth == 7){
                            $StartDayofMonth = 3;
                            $MonthName = 'Juli';
                        }                        
                        if ($CounterMonth == 8){
                            $StartDayofMonth = 6;
                            $MonthName = 'August';
                        }                        
                        if ($CounterMonth == 9){
                            $StartDayofMonth = 2;
                            $MonthName = 'September';
                        }
                        if ($CounterMonth == 10){
                            $StartDayofMonth = 4;
                            $MonthName = 'Oktober';
                        }
                        if ($CounterMonth == 11){
                            $StartDayofMonth = 0;
                            $MonthName = 'November';
                        }
                        if ($CounterMonth == 12){
                            $StartDayofMonth = 2;
                            $MonthName = 'Dezember';
                        }
                        echo"<p>$MonthName</p>";
?>
                    </div>
                
                    <div class="Weekband">
                        <div class="CalDiv1" style="margin-top: 4px;">
                            <p class="WeekDesc"></p>
                            <p class="WeekDesc" style="background-color: #66CDAA; margin-bottom: 4px;">Woche 1</p>
                            <p class="WeekDesc" style="background-color: #66CDAA; margin-bottom: 4px;">Woche 2</p>
                            <p class="WeekDesc" style="background-color: #66CDAA; margin-bottom: 4px;">Woche 3</p>
                            <p class="WeekDesc" style="background-color: #66CDAA; margin-bottom: 4px;">Woche 4</p>
                            <p class="WeekDesc" style="background-color: #66CDAA; margin-bottom: 4px;">Woche 5</p>
                            <p class="WeekDesc" style="background-color: #66CDAA; margin-bottom: 4px;">Woche 6</p>
                        </div>
                        
                        <div class="CalDiv1" style="margin: 0px;">
                            
                            <div class="Weekband"  style="margin: 0px;">
                                    <p class="Albo" style="background-color: #F08080;">Montag</p>
                                    <p class="Albo" style="background-color: #FFA07A;">Dienstag</p>
                                    <p class="Albo" style="background-color: #F0E68C;">Mitwoch</p>
                                    <p class="Albo" style="background-color: #98FB89;">Donnerstag</p>
                                    <p class="Albo" style="background-color: #AFEEEE;">Freitag</p>
                                    <p class="Albo" style="background-color: #DDA0DD;">Samstag</p>
                                    <p class="Albo" style="background-color: #FFB6C1;">Sonntag</p>
                            </div>
                            
                            <div style="margin: 0px; justify-content: center; align-items: center;">
                                <form action="BookingKalendar.php" method="Post"  class="Weekband"  style="margin: 2px; flex-wrap: wrap;">
    <?php
                                    $DaysInMonth = intval(cal_days_in_month(CAL_GREGORIAN, $CounterMonth, $CurrYear));
                                    if (intval($StartDayofMonth) == 0){
                                        $DaysBefore = 6;
                                    }
                                    if (intval($StartDayofMonth) == 1){
                                        $DaysBefore = 0;
                                    }
                                    if (intval($StartDayofMonth) == 2){
                                        $DaysBefore = 1;
                                    }
                                    if (intval($StartDayofMonth) == 3){
                                        $DaysBefore = 2;
                                    }
                                    if (intval($StartDayofMonth) == 4){
                                        $DaysBefore = 3;
                                    }
                                    if (intval($StartDayofMonth) == 5){
                                        $DaysBefore = 4;
                                    }
                                    if (intval($StartDayofMonth) == 6){
                                        $DaysBefore = 5;
                                    }
                                    $FieldsTotal = intval($DaysBefore) + intval($DaysInMonth);
                                    $DaysLeftover = 42 - intval($FieldsTotal);
                                    
                                    $CurrYear = date('Y');
                                    
                                    echo" <input type='text' name='ApparentYear' value='$CurrYear' style='display: none;'>    
                                          <input type='text' name='ApparentMonth' value='$CounterMonth' style='display: none;'>";
                                          
                                    $_SESSION['CurrentBookedYear'] = $CurrYear;
                                    $_SESSION['CurrentBookedMonth'] = $CounterMonth;
                                    include 'DynamicDateDisplay.php';
    ?>
                                </form>
                            </div>
                        </div>
                    </div>