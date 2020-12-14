<?php
    if(!isset($_COOKIE['PHPSESSID'])){
        session_start();    //start the session
    }
                $Year = $_SESSION['CurrentBookedYear'];
                $Month = $_SESSION['CurrentBookedMonth'];
                
                $dbServername = "localhost";
                $dbUsername = "zGrafando";
                $dbPassword = "Nbiwe!12";
                $dbName = "SomyimData";
                $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                if ($conn-> connect_error){
                    die("Connection to Database failed: ".$conn -> connect_error);
                }
                
                $Date1 = $Year.'-'.$Month.'-'.'1';
                $Date2 = $Year.'-'.$Month.'-'.'2';
                $Date3 = $Year.'-'.$Month.'-'.'3';
                $Date4 = $Year.'-'.$Month.'-'.'4';
                $Date5 = $Year.'-'.$Month.'-'.'5';
                $Date6 = $Year.'-'.$Month.'-'.'6';
                $Date7 = $Year.'-'.$Month.'-'.'7';
                $Date8 = $Year.'-'.$Month.'-'.'8';
                $Date9 = $Year.'-'.$Month.'-'.'9';
                $Date10 = $Year.'-'.$Month.'-'.'10';
                $Date11 = $Year.'-'.$Month.'-'.'11';
                $Date12 = $Year.'-'.$Month.'-'.'12';
                $Date13 = $Year.'-'.$Month.'-'.'13';
                $Date14 = $Year.'-'.$Month.'-'.'14';
                $Date15 = $Year.'-'.$Month.'-'.'15';
                $Date16 = $Year.'-'.$Month.'-'.'16';
                $Date17 = $Year.'-'.$Month.'-'.'17';
                $Date18 = $Year.'-'.$Month.'-'.'18';
                $Date19 = $Year.'-'.$Month.'-'.'19';
                $Date20 = $Year.'-'.$Month.'-'.'20';
                $Date21 = $Year.'-'.$Month.'-'.'21';
                $Date22 = $Year.'-'.$Month.'-'.'22';
                $Date23 = $Year.'-'.$Month.'-'.'23';
                $Date24 = $Year.'-'.$Month.'-'.'24';
                $Date25 = $Year.'-'.$Month.'-'.'25';
                $Date26 = $Year.'-'.$Month.'-'.'26';
                $Date27 = $Year.'-'.$Month.'-'.'27';
                $Date28 = $Year.'-'.$Month.'-'.'28';
                $Date29 = $Year.'-'.$Month.'-'.'29';
                $Date30 = $Year.'-'.$Month.'-'.'30';
                $Date31 = $Year.'-'.$Month.'-'.'31';
                
                $QueryDate1 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date1'");
                $QueryDate2 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date2'");
                $QueryDate3 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date3'");
                $QueryDate4 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date4'");
                $QueryDate5 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date5'");
                $QueryDate6 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date6'");
                $QueryDate7 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date7'");
                $QueryDate8 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date8'");
                $QueryDate9 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date9'");
                $QueryDate10 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date10'");
                $QueryDate11 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date11'");
                $QueryDate12 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date12'");
                $QueryDate13 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date13'");
                $QueryDate14 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date14'");
                $QueryDate15 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date15'");
                $QueryDate16 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date16'");
                $QueryDate17 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date17'");
                $QueryDate18 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date18'");
                $QueryDate19 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date19'");
                $QueryDate20 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date20'");
                $QueryDate21 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date21'");
                $QueryDate22 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date22'");
                $QueryDate23 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date23'");
                $QueryDate24 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date24'");
                $QueryDate25 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date25'");
                $QueryDate26 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date26'");
                $QueryDate27 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date27'");
                $QueryDate28 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date28'");
                $QueryDate29 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date29'");
                $QueryDate30 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date30'");
                $QueryDate31 = $conn->prepare("SELECT T1, T2, T3, T4, T5 FROM Termin WHERE Datum = '$Date31'");
                


                                    for ($i = 1; $i <= intval($DaysBefore); $i++){
                                        echo"
                                            <input type='submit' name='Text.$i' id='text.$i' value='' class='Albo' style='margin: 2px; background-color: #FFFFFF' disabled>
                                        ";
                                    }
                                
                                    if (intval($DaysInMonth) == 28){
                                        
                                        $QueryDate1->execute();
                                        $r1 = $QueryDate1->get_result();
                                        $result1 = $r1->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result1['T1']) && !empty($result1['T2']) && !empty($result1['T3']) && !empty($result1['T4']) && !empty($result1['T5'])){  
                                            echo"    <input type='submit' name='Day1' id='Tag1' value='1' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day1' id='Tag1' value='1' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate2->execute();
                                        $r2 = $QueryDate2->get_result();
                                        $result2 = $r2->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result2['T1']) && !empty($result2['T2']) && !empty($result2['T3']) && !empty($result2['T4']) && !empty($result2['T5'])){
                                            echo"    <input type='submit' name='Day2' id='Tag2' value='2' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day2' id='Tag2' value='2' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate3->execute();
                                        $r3 = $QueryDate3->get_result();
                                        $result3 = $r3->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result3['T1']) && !empty($result3['T2']) && !empty($result3['T3']) && !empty($result3['T4']) && !empty($result3['T5'])){
                                            echo"    <input type='submit' name='Day3' id='Tag3' value='3' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day3' id='Tag3' value='3' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate4->execute();
                                        $r4 = $QueryDate4->get_result();
                                        $result4 = $r4->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result4['T1']) && !empty($result4['T2']) && !empty($result4['T3']) && !empty($result4['T4']) && !empty($result4['T5'])){
                                            echo"    <input type='submit' name='Day4' id='Tag4' value='4' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day4' id='Tag4' value='4' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate5->execute();
                                        $r5 = $QueryDate5->get_result();
                                        $result5 = $r5->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result5['T1']) && !empty($result5['T2']) && !empty($result5['T3']) && !empty($result5['T4']) && !empty($result5['T5'])){
                                            echo"    <input type='submit' name='Day5' id='Tag5' value='5' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day5' id='Tag5' value='5' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate6->execute();
                                        $r6 = $QueryDate6->get_result();
                                        $result6 = $r6->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result6['T1']) && !empty($result6['T2']) && !empty($result6['T3']) && !empty($result6['T4']) && !empty($result6['T5'])){
                                            echo"    <input type='submit' name='Day6' id='Tag6' value='6' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day6' id='Tag6' value='6' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate7->execute();
                                        $r7 = $QueryDate7->get_result();
                                        $result7 = $r7->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result7['T1']) && !empty($result7['T2']) && !empty($result7['T3']) && !empty($result7['T4']) && !empty($result7['T5'])){
                                            echo"    <input type='submit' name='Day7' id='Tag7' value='7' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day7' id='Tag7' value='7' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate8->execute();
                                        $r8 = $QueryDate8->get_result();
                                        $result8 = $r8->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result8['T1']) && !empty($result8['T2']) && !empty($result8['T3']) && !empty($result8['T4']) && !empty($result8['T5'])){
                                            echo"    <input type='submit' name='Day8' id='Tag8' value='8' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day8' id='Tag8' value='8' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate9->execute();
                                        $r9 = $QueryDate9->get_result();
                                        $result9 = $r9->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result9['T1']) && !empty($result9['T2']) && !empty($result9['T3']) && !empty($result9['T4']) && !empty($result9['T5'])){
                                            echo"    <input type='submit' name='Day9' id='Tag9' value='9' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day9' id='Tag9' value='9' class='Albo' style='margin: 2px;'> ";
                                        }
                                        $QueryDate10->execute();
                                        $r10 = $QueryDate10->get_result();
                                        $result10 = $r10->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result10['T1']) && !empty($result10['T2']) && !empty($result10['T3']) && !empty($result10['T4']) && !empty($result10['T5'])){
                                            echo"    <input type='submit' name='Day10' id='Tag10' value='10' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day10' id='Tag10' value='10' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate11->execute();
                                        $r11 = $QueryDate11->get_result();
                                        $result11 = $r11->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result11['T1']) && !empty($result11['T2']) && !empty($result11['T3']) && !empty($result11['T4']) && !empty($result11['T5'])){
                                            echo"    <input type='submit' name='Day11' id='Tag11' value='11' class='Albo' disabled='disabled' style='margin: 2px;  background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day11' id='Tag11' value='11' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate12->execute();
                                        $r12 = $QueryDate12->get_result();
                                        $result12 = $r12->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result12['T1']) && !empty($result12['T2']) && !empty($result12['T3']) && !empty($result12['T4']) && !empty($result12['T5'])){
                                            echo"    <input type='submit' name='Day12' id='Tag12' value='12' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day12' id='Tag12' value='12' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate13->execute();
                                        $r13 = $QueryDate13->get_result();
                                        $result13 = $r13->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result13['T1']) && !empty($result13['T2']) && !empty($result13['T3']) && !empty($result13['T4']) && !empty($result13['T5'])){
                                            echo"    <input type='submit' name='Day13' id='Tag13' value='13' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day13' id='Tag13' value='13' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate14->execute();
                                        $r14 = $QueryDate14->get_result();
                                        $result14 = $r14->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result14['T1']) && !empty($result14['T2']) && !empty($result14['T3']) && !empty($result14['T4']) && !empty($result14['T5'])){
                                            echo"    <input type='submit' name='Day14' id='Tag14' value='14' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day14' id='Tag14' value='14' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate15->execute();
                                        $r15 = $QueryDate15->get_result();
                                        $result15 = $r15->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result15['T1']) && !empty($result15['T2']) && !empty($result15['T3']) && !empty($result15['T4']) && !empty($result15['T5'])){
                                            echo"    <input type='submit' name='Day15' id='Tag15' value='15' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day15' id='Tag15' value='15' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate16->execute();
                                        $r16 = $QueryDate16->get_result();
                                        $result16 = $r16->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result16['T1']) && !empty($result16['T2']) && !empty($result16['T3']) && !empty($result16['T4']) && !empty($result16['T5'])){
                                            echo"    <input type='submit' name='Day16' id='Tag16' value='16' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day16' id='Tag16' value='16' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate17->execute();
                                        $r17 = $QueryDate17->get_result();
                                        $result17 = $r17->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result17['T1']) && !empty($result17['T2']) && !empty($result17['T3']) && !empty($result17['T4']) && !empty($result17['T5'])){
                                            echo"    <input type='submit' name='Day17' id='Tag17' value='17' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day17' id='Tag17' value='17' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate18->execute();
                                        $r18 = $QueryDate18->get_result();
                                        $result18 = $r18->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result18['T1']) && !empty($result18['T2']) && !empty($result18['T3']) && !empty($result18['T4']) && !empty($result18['T5'])){
                                            echo"    <input type='submit' name='Day18' id='Tag18' value='18' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day18' id='Tag18' value='18' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate19->execute();
                                        $r19 = $QueryDate19->get_result();
                                        $result19 = $r19->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result19['T1']) && !empty($result19['T2']) && !empty($result19['T3']) && !empty($result19['T4']) && !empty($result19['T5'])){
                                            echo"    <input type='submit' name='Day19' id='Tag19' value='19' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day19' id='Tag19' value='19' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate20->execute();
                                        $r20 = $QueryDate20->get_result();
                                        $result20 = $r20->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result20['T1']) && !empty($result20['T2']) && !empty($result20['T3']) && !empty($result20['T4']) && !empty($result20['T5'])){
                                            echo"    <input type='submit' name='Day20' id='Tag20' value='20' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day20' id='Tag20' value='20' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate21->execute();
                                        $r21 = $QueryDate21->get_result();
                                        $result21 = $r21->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result21['T1']) && !empty($result21['T2']) && !empty($result21['T3']) && !empty($result21['T4']) && !empty($result21['T5'])){
                                            echo"    <input type='submit' name='Day21' id='Tag21' value='21' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day21' id='Tag21' value='21' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate22->execute();
                                        $r22 = $QueryDate22->get_result();
                                        $result22 = $r22->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result22['T1']) && !empty($result22['T2']) && !empty($result22['T3']) && !empty($result22['T4']) && !empty($result22['T5'])){
                                            echo"    <input type='submit' name='Day22' id='Tag22' value='22' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day22' id='Tag22' value='22' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate23->execute();
                                        $r23 = $QueryDate23->get_result();
                                        $result23 = $r23->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result23['T1']) && !empty($result23['T2']) && !empty($result23['T3']) && !empty($result23['T4']) && !empty($result23['T5'])){
                                            echo"    <input type='submit' name='Day23' id='Tag23' value='23' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day23' id='Tag23' value='23' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate24->execute();
                                        $r24 = $QueryDate24->get_result();
                                        $result24 = $r24->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result24['T1']) && !empty($result24['T2']) && !empty($result24['T3']) && !empty($result24['T4']) && !empty($result24['T5'])){
                                            echo"    <input type='submit' name='Day24' id='Tag24' value='24' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day24' id='Tag24' value='24' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate25->execute();
                                        $r25 = $QueryDate25->get_result();
                                        $result25 = $r25->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result25['T1']) && !empty($result25['T2']) && !empty($result25['T3']) && !empty($result25['T4']) && !empty($result25['T5'])){
                                            echo"    <input type='submit' name='Day25' id='Tag25' value='25' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day25' id='Tag25' value='25' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate26->execute();
                                        $r26 = $QueryDate26->get_result();
                                        $result26 = $r26->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result26['T1']) && !empty($result26['T2']) && !empty($result26['T3']) && !empty($result26['T4']) && !empty($result26['T5'])){
                                            echo"    <input type='submit' name='Day26' id='Tag26' value='26' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day26' id='Tag26' value='26' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate27->execute();
                                        $r27 = $QueryDate27->get_result();
                                        $result27 = $r27->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result27['T1']) && !empty($result27['T2']) && !empty($result27['T3']) && !empty($result27['T4']) && !empty($result27['T5'])){
                                            echo"    <input type='submit' name='Day27' id='Tag27' value='27' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day27' id='Tag27' value='27' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        $QueryDate28->execute();
                                        $r28 = $QueryDate28->get_result();
                                        $result28 = $r28->fetch_array(MYSQLI_ASSOC);
                                        if(!empty($result28['T1']) && !empty($result28['T2']) && !empty($result28['T3']) && !empty($result28['T4']) && !empty($result28['T5'])){
                                            echo"    <input type='submit' name='Day28' id='Tag28' value='28' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                        }
                                        else{
                                            echo"    <input type='submit' name='Day28' id='Tag28' value='28' class='Albo' style='margin: 2px;'> ";
                                        }
                                        
                                        
                                    }
                                    else{
                                        if (intval($DaysInMonth) == 29){
                                            
                                            $QueryDate1->execute();
                                            $r1 = $QueryDate1->get_result();
                                            $result1 = $r1->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result1['T1']) && !empty($result1['T2']) && !empty($result1['T3']) && !empty($result1['T4']) && !empty($result1['T5'])){  
                                                echo"    <input type='submit' name='Day1' id='Tag1' value='1' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day1' id='Tag1' value='1' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate2->execute();
                                            $r2 = $QueryDate2->get_result();
                                            $result2 = $r2->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result2['T1']) && !empty($result2['T2']) && !empty($result2['T3']) && !empty($result2['T4']) && !empty($result2['T5'])){
                                                echo"    <input type='submit' name='Day2' id='Tag2' value='2' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day2' id='Tag2' value='2' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate3->execute();
                                            $r3 = $QueryDate3->get_result();
                                            $result3 = $r3->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result3['T1']) && !empty($result3['T2']) && !empty($result3['T3']) && !empty($result3['T4']) && !empty($result3['T5'])){
                                                echo"    <input type='submit' name='Day3' id='Tag3' value='3' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day3' id='Tag3' value='3' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate4->execute();
                                            $r4 = $QueryDate4->get_result();
                                            $result4 = $r4->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result4['T1']) && !empty($result4['T2']) && !empty($result4['T3']) && !empty($result4['T4']) && !empty($result4['T5'])){
                                                echo"    <input type='submit' name='Day4' id='Tag4' value='4' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day4' id='Tag4' value='4' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate5->execute();
                                            $r5 = $QueryDate5->get_result();
                                            $result5 = $r5->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result5['T1']) && !empty($result5['T2']) && !empty($result5['T3']) && !empty($result5['T4']) && !empty($result5['T5'])){
                                                echo"    <input type='submit' name='Day5' id='Tag5' value='5' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day5' id='Tag5' value='5' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate6->execute();
                                            $r6 = $QueryDate6->get_result();
                                            $result6 = $r6->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result6['T1']) && !empty($result6['T2']) && !empty($result6['T3']) && !empty($result6['T4']) && !empty($result6['T5'])){
                                                echo"    <input type='submit' name='Day6' id='Tag6' value='6' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day6' id='Tag6' value='6' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate7->execute();
                                            $r7 = $QueryDate7->get_result();
                                            $result7 = $r7->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result7['T1']) && !empty($result7['T2']) && !empty($result7['T3']) && !empty($result7['T4']) && !empty($result7['T5'])){
                                                echo"    <input type='submit' name='Day7' id='Tag7' value='7' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day7' id='Tag7' value='7' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate8->execute();
                                            $r8 = $QueryDate8->get_result();
                                            $result8 = $r8->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result8['T1']) && !empty($result8['T2']) && !empty($result8['T3']) && !empty($result8['T4']) && !empty($result8['T5'])){
                                                echo"    <input type='submit' name='Day8' id='Tag8' value='8' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day8' id='Tag8' value='8' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate9->execute();
                                            $r9 = $QueryDate9->get_result();
                                            $result9 = $r9->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result9['T1']) && !empty($result9['T2']) && !empty($result9['T3']) && !empty($result9['T4']) && !empty($result9['T5'])){
                                                echo"    <input type='submit' name='Day9' id='Tag9' value='9' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day9' id='Tag9' value='9' class='Albo' style='margin: 2px;'> ";
                                            }
                                            $QueryDate10->execute();
                                            $r10 = $QueryDate10->get_result();
                                            $result10 = $r10->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result10['T1']) && !empty($result10['T2']) && !empty($result10['T3']) && !empty($result10['T4']) && !empty($result10['T5'])){
                                                echo"    <input type='submit' name='Day10' id='Tag10' value='10' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day10' id='Tag10' value='10' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate11->execute();
                                            $r11 = $QueryDate11->get_result();
                                            $result11 = $r11->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result11['T1']) && !empty($result11['T2']) && !empty($result11['T3']) && !empty($result11['T4']) && !empty($result11['T5'])){
                                                echo"    <input type='submit' name='Day11' id='Tag11' value='11' class='Albo' disabled='disabled' style='margin: 2px;  background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day11' id='Tag11' value='11' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate12->execute();
                                            $r12 = $QueryDate12->get_result();
                                            $result12 = $r12->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result12['T1']) && !empty($result12['T2']) && !empty($result12['T3']) && !empty($result12['T4']) && !empty($result12['T5'])){
                                                echo"    <input type='submit' name='Day12' id='Tag12' value='12' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day12' id='Tag12' value='12' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate13->execute();
                                            $r13 = $QueryDate13->get_result();
                                            $result13 = $r13->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result13['T1']) && !empty($result13['T2']) && !empty($result13['T3']) && !empty($result13['T4']) && !empty($result13['T5'])){
                                                echo"    <input type='submit' name='Day13' id='Tag13' value='13' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day13' id='Tag13' value='13' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate14->execute();
                                            $r14 = $QueryDate14->get_result();
                                            $result14 = $r14->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result14['T1']) && !empty($result14['T2']) && !empty($result14['T3']) && !empty($result14['T4']) && !empty($result14['T5'])){
                                                echo"    <input type='submit' name='Day14' id='Tag14' value='14' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day14' id='Tag14' value='14' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate15->execute();
                                            $r15 = $QueryDate15->get_result();
                                            $result15 = $r15->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result15['T1']) && !empty($result15['T2']) && !empty($result15['T3']) && !empty($result15['T4']) && !empty($result15['T5'])){
                                                echo"    <input type='submit' name='Day15' id='Tag15' value='15' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day15' id='Tag15' value='15' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate16->execute();
                                            $r16 = $QueryDate16->get_result();
                                            $result16 = $r16->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result16['T1']) && !empty($result16['T2']) && !empty($result16['T3']) && !empty($result16['T4']) && !empty($result16['T5'])){
                                                echo"    <input type='submit' name='Day16' id='Tag16' value='16' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day16' id='Tag16' value='16' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate17->execute();
                                            $r17 = $QueryDate17->get_result();
                                            $result17 = $r17->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result17['T1']) && !empty($result17['T2']) && !empty($result17['T3']) && !empty($result17['T4']) && !empty($result17['T5'])){
                                                echo"    <input type='submit' name='Day17' id='Tag17' value='17' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day17' id='Tag17' value='17' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate18->execute();
                                            $r18 = $QueryDate18->get_result();
                                            $result18 = $r18->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result18['T1']) && !empty($result18['T2']) && !empty($result18['T3']) && !empty($result18['T4']) && !empty($result18['T5'])){
                                                echo"    <input type='submit' name='Day18' id='Tag18' value='18' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day18' id='Tag18' value='18' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate19->execute();
                                            $r19 = $QueryDate19->get_result();
                                            $result19 = $r19->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result19['T1']) && !empty($result19['T2']) && !empty($result19['T3']) && !empty($result19['T4']) && !empty($result19['T5'])){
                                                echo"    <input type='submit' name='Day19' id='Tag19' value='19' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day19' id='Tag19' value='19' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate20->execute();
                                            $r20 = $QueryDate20->get_result();
                                            $result20 = $r20->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result20['T1']) && !empty($result20['T2']) && !empty($result20['T3']) && !empty($result20['T4']) && !empty($result20['T5'])){
                                                echo"    <input type='submit' name='Day20' id='Tag20' value='20' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day20' id='Tag20' value='20' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate21->execute();
                                            $r21 = $QueryDate21->get_result();
                                            $result21 = $r21->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result21['T1']) && !empty($result21['T2']) && !empty($result21['T3']) && !empty($result21['T4']) && !empty($result21['T5'])){
                                                echo"    <input type='submit' name='Day21' id='Tag21' value='21' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day21' id='Tag21' value='21' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate22->execute();
                                            $r22 = $QueryDate22->get_result();
                                            $result22 = $r22->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result22['T1']) && !empty($result22['T2']) && !empty($result22['T3']) && !empty($result22['T4']) && !empty($result22['T5'])){
                                                echo"    <input type='submit' name='Day22' id='Tag22' value='22' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day22' id='Tag22' value='22' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate23->execute();
                                            $r23 = $QueryDate23->get_result();
                                            $result23 = $r23->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result23['T1']) && !empty($result23['T2']) && !empty($result23['T3']) && !empty($result23['T4']) && !empty($result23['T5'])){
                                                echo"    <input type='submit' name='Day23' id='Tag23' value='23' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day23' id='Tag23' value='23' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate24->execute();
                                            $r24 = $QueryDate24->get_result();
                                            $result24 = $r24->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result24['T1']) && !empty($result24['T2']) && !empty($result24['T3']) && !empty($result24['T4']) && !empty($result24['T5'])){
                                                echo"    <input type='submit' name='Day24' id='Tag24' value='24' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day24' id='Tag24' value='24' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate25->execute();
                                            $r25 = $QueryDate25->get_result();
                                            $result25 = $r25->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result25['T1']) && !empty($result25['T2']) && !empty($result25['T3']) && !empty($result25['T4']) && !empty($result25['T5'])){
                                                echo"    <input type='submit' name='Day25' id='Tag25' value='25' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day25' id='Tag25' value='25' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate26->execute();
                                            $r26 = $QueryDate26->get_result();
                                            $result26 = $r26->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result26['T1']) && !empty($result26['T2']) && !empty($result26['T3']) && !empty($result26['T4']) && !empty($result26['T5'])){
                                                echo"    <input type='submit' name='Day26' id='Tag26' value='26' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day26' id='Tag26' value='26' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate27->execute();
                                            $r27 = $QueryDate27->get_result();
                                            $result27 = $r27->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result27['T1']) && !empty($result27['T2']) && !empty($result27['T3']) && !empty($result27['T4']) && !empty($result27['T5'])){
                                                echo"    <input type='submit' name='Day27' id='Tag27' value='27' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day27' id='Tag27' value='27' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate28->execute();
                                            $r28 = $QueryDate28->get_result();
                                            $result28 = $r28->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result28['T1']) && !empty($result28['T2']) && !empty($result28['T3']) && !empty($result28['T4']) && !empty($result28['T5'])){
                                                echo"    <input type='submit' name='Day28' id='Tag28' value='28' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day28' id='Tag28' value='28' class='Albo' style='margin: 2px;'> ";
                                            }
                                            
                                            $QueryDate29->execute();
                                            $r29 = $QueryDate29->get_result();
                                            $result29 = $r29->fetch_array(MYSQLI_ASSOC);
                                            if(!empty($result29['T1']) && !empty($result29['T2']) && !empty($result29['T3']) && !empty($result29['T4']) && !empty($result29['T5'])){
                                                echo"    <input type='submit' name='Day29' id='Tag29' value='29' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                            }
                                            else{
                                                echo"    <input type='submit' name='Day29' id='Tag29' value='29' class='Albo' style='margin: 2px;'> ";
                                            }
                                       
          
                                        }
                                        else{
                                            if (intval($DaysInMonth) == 30){
                                                
                                                $QueryDate1->execute();
                                                $r1 = $QueryDate1->get_result();
                                                $result1 = $r1->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result1['T1']) && !empty($result1['T2']) && !empty($result1['T3']) && !empty($result1['T4']) && !empty($result1['T5'])){  
                                                    echo"    <input type='submit' name='Day1' id='Tag1' value='1' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day1' id='Tag1' value='1' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate2->execute();
                                                $r2 = $QueryDate2->get_result();
                                                $result2 = $r2->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result2['T1']) && !empty($result2['T2']) && !empty($result2['T3']) && !empty($result2['T4']) && !empty($result2['T5'])){
                                                    echo"    <input type='submit' name='Day2' id='Tag2' value='2' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day2' id='Tag2' value='2' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate3->execute();
                                                $r3 = $QueryDate3->get_result();
                                                $result3 = $r3->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result3['T1']) && !empty($result3['T2']) && !empty($result3['T3']) && !empty($result3['T4']) && !empty($result3['T5'])){
                                                    echo"    <input type='submit' name='Day3' id='Tag3' value='3' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day3' id='Tag3' value='3' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate4->execute();
                                                $r4 = $QueryDate4->get_result();
                                                $result4 = $r4->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result4['T1']) && !empty($result4['T2']) && !empty($result4['T3']) && !empty($result4['T4']) && !empty($result4['T5'])){
                                                    echo"    <input type='submit' name='Day4' id='Tag4' value='4' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day4' id='Tag4' value='4' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate5->execute();
                                                $r5 = $QueryDate5->get_result();
                                                $result5 = $r5->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result5['T1']) && !empty($result5['T2']) && !empty($result5['T3']) && !empty($result5['T4']) && !empty($result5['T5'])){
                                                    echo"    <input type='submit' name='Day5' id='Tag5' value='5' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day5' id='Tag5' value='5' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate6->execute();
                                                $r6 = $QueryDate6->get_result();
                                                $result6 = $r6->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result6['T1']) && !empty($result6['T2']) && !empty($result6['T3']) && !empty($result6['T4']) && !empty($result6['T5'])){
                                                    echo"    <input type='submit' name='Day6' id='Tag6' value='6' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day6' id='Tag6' value='6' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate7->execute();
                                                $r7 = $QueryDate7->get_result();
                                                $result7 = $r7->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result7['T1']) && !empty($result7['T2']) && !empty($result7['T3']) && !empty($result7['T4']) && !empty($result7['T5'])){
                                                    echo"    <input type='submit' name='Day7' id='Tag7' value='7' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day7' id='Tag7' value='7' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate8->execute();
                                                $r8 = $QueryDate8->get_result();
                                                $result8 = $r8->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result8['T1']) && !empty($result8['T2']) && !empty($result8['T3']) && !empty($result8['T4']) && !empty($result8['T5'])){
                                                    echo"    <input type='submit' name='Day8' id='Tag8' value='8' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day8' id='Tag8' value='8' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate9->execute();
                                                $r9 = $QueryDate9->get_result();
                                                $result9 = $r9->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result9['T1']) && !empty($result9['T2']) && !empty($result9['T3']) && !empty($result9['T4']) && !empty($result9['T5'])){
                                                    echo"    <input type='submit' name='Day9' id='Tag9' value='9' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day9' id='Tag9' value='9' class='Albo' style='margin: 2px;'> ";
                                                }
                                                $QueryDate10->execute();
                                                $r10 = $QueryDate10->get_result();
                                                $result10 = $r10->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result10['T1']) && !empty($result10['T2']) && !empty($result10['T3']) && !empty($result10['T4']) && !empty($result10['T5'])){
                                                    echo"    <input type='submit' name='Day10' id='Tag10' value='10' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day10' id='Tag10' value='10' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate11->execute();
                                                $r11 = $QueryDate11->get_result();
                                                $result11 = $r11->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result11['T1']) && !empty($result11['T2']) && !empty($result11['T3']) && !empty($result11['T4']) && !empty($result11['T5'])){
                                                    echo"    <input type='submit' name='Day11' id='Tag11' value='11' class='Albo' disabled='disabled' style='margin: 2px;  background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day11' id='Tag11' value='11' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate12->execute();
                                                $r12 = $QueryDate12->get_result();
                                                $result12 = $r12->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result12['T1']) && !empty($result12['T2']) && !empty($result12['T3']) && !empty($result12['T4']) && !empty($result12['T5'])){
                                                    echo"    <input type='submit' name='Day12' id='Tag12' value='12' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day12' id='Tag12' value='12' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate13->execute();
                                                $r13 = $QueryDate13->get_result();
                                                $result13 = $r13->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result13['T1']) && !empty($result13['T2']) && !empty($result13['T3']) && !empty($result13['T4']) && !empty($result13['T5'])){
                                                    echo"    <input type='submit' name='Day13' id='Tag13' value='13' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day13' id='Tag13' value='13' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate14->execute();
                                                $r14 = $QueryDate14->get_result();
                                                $result14 = $r14->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result14['T1']) && !empty($result14['T2']) && !empty($result14['T3']) && !empty($result14['T4']) && !empty($result14['T5'])){
                                                    echo"    <input type='submit' name='Day14' id='Tag14' value='14' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day14' id='Tag14' value='14' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate15->execute();
                                                $r15 = $QueryDate15->get_result();
                                                $result15 = $r15->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result15['T1']) && !empty($result15['T2']) && !empty($result15['T3']) && !empty($result15['T4']) && !empty($result15['T5'])){
                                                    echo"    <input type='submit' name='Day15' id='Tag15' value='15' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day15' id='Tag15' value='15' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate16->execute();
                                                $r16 = $QueryDate16->get_result();
                                                $result16 = $r16->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result16['T1']) && !empty($result16['T2']) && !empty($result16['T3']) && !empty($result16['T4']) && !empty($result16['T5'])){
                                                    echo"    <input type='submit' name='Day16' id='Tag16' value='16' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day16' id='Tag16' value='16' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate17->execute();
                                                $r17 = $QueryDate17->get_result();
                                                $result17 = $r17->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result17['T1']) && !empty($result17['T2']) && !empty($result17['T3']) && !empty($result17['T4']) && !empty($result17['T5'])){
                                                    echo"    <input type='submit' name='Day17' id='Tag17' value='17' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day17' id='Tag17' value='17' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate18->execute();
                                                $r18 = $QueryDate18->get_result();
                                                $result18 = $r18->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result18['T1']) && !empty($result18['T2']) && !empty($result18['T3']) && !empty($result18['T4']) && !empty($result18['T5'])){
                                                    echo"    <input type='submit' name='Day18' id='Tag18' value='18' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day18' id='Tag18' value='18' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate19->execute();
                                                $r19 = $QueryDate19->get_result();
                                                $result19 = $r19->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result19['T1']) && !empty($result19['T2']) && !empty($result19['T3']) && !empty($result19['T4']) && !empty($result19['T5'])){
                                                    echo"    <input type='submit' name='Day19' id='Tag19' value='19' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day19' id='Tag19' value='19' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate20->execute();
                                                $r20 = $QueryDate20->get_result();
                                                $result20 = $r20->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result20['T1']) && !empty($result20['T2']) && !empty($result20['T3']) && !empty($result20['T4']) && !empty($result20['T5'])){
                                                    echo"    <input type='submit' name='Day20' id='Tag20' value='20' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day20' id='Tag20' value='20' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate21->execute();
                                                $r21 = $QueryDate21->get_result();
                                                $result21 = $r21->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result21['T1']) && !empty($result21['T2']) && !empty($result21['T3']) && !empty($result21['T4']) && !empty($result21['T5'])){
                                                    echo"    <input type='submit' name='Day21' id='Tag21' value='21' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day21' id='Tag21' value='21' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate22->execute();
                                                $r22 = $QueryDate22->get_result();
                                                $result22 = $r22->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result22['T1']) && !empty($result22['T2']) && !empty($result22['T3']) && !empty($result22['T4']) && !empty($result22['T5'])){
                                                    echo"    <input type='submit' name='Day22' id='Tag22' value='22' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day22' id='Tag22' value='22' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate23->execute();
                                                $r23 = $QueryDate23->get_result();
                                                $result23 = $r23->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result23['T1']) && !empty($result23['T2']) && !empty($result23['T3']) && !empty($result23['T4']) && !empty($result23['T5'])){
                                                    echo"    <input type='submit' name='Day23' id='Tag23' value='23' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day23' id='Tag23' value='23' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate24->execute();
                                                $r24 = $QueryDate24->get_result();
                                                $result24 = $r24->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result24['T1']) && !empty($result24['T2']) && !empty($result24['T3']) && !empty($result24['T4']) && !empty($result24['T5'])){
                                                    echo"    <input type='submit' name='Day24' id='Tag24' value='24' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day24' id='Tag24' value='24' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate25->execute();
                                                $r25 = $QueryDate25->get_result();
                                                $result25 = $r25->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result25['T1']) && !empty($result25['T2']) && !empty($result25['T3']) && !empty($result25['T4']) && !empty($result25['T5'])){
                                                    echo"    <input type='submit' name='Day25' id='Tag25' value='25' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day25' id='Tag25' value='25' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate26->execute();
                                                $r26 = $QueryDate26->get_result();
                                                $result26 = $r26->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result26['T1']) && !empty($result26['T2']) && !empty($result26['T3']) && !empty($result26['T4']) && !empty($result26['T5'])){
                                                    echo"    <input type='submit' name='Day26' id='Tag26' value='26' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day26' id='Tag26' value='26' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate27->execute();
                                                $r27 = $QueryDate27->get_result();
                                                $result27 = $r27->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result27['T1']) && !empty($result27['T2']) && !empty($result27['T3']) && !empty($result27['T4']) && !empty($result27['T5'])){
                                                    echo"    <input type='submit' name='Day27' id='Tag27' value='27' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day27' id='Tag27' value='27' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate28->execute();
                                                $r28 = $QueryDate28->get_result();
                                                $result28 = $r28->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result28['T1']) && !empty($result28['T2']) && !empty($result28['T3']) && !empty($result28['T4']) && !empty($result28['T5'])){
                                                    echo"    <input type='submit' name='Day28' id='Tag28' value='28' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day28' id='Tag28' value='28' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate29->execute();
                                                $r29 = $QueryDate29->get_result();
                                                $result29 = $r29->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result29['T1']) && !empty($result29['T2']) && !empty($result29['T3']) && !empty($result29['T4']) && !empty($result29['T5'])){
                                                    echo"    <input type='submit' name='Day29' id='Tag29' value='29' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day29' id='Tag29' value='29' class='Albo' style='margin: 2px;'> ";
                                                }
                                                
                                                $QueryDate30->execute();
                                                $r30 = $QueryDate30->get_result();
                                                $result30 = $r30->fetch_array(MYSQLI_ASSOC);
                                                if(!empty($result30['T1']) && !empty($result30['T2']) && !empty($result30['T3']) && !empty($result30['T4']) && !empty($result30['T5'])){
                                                    echo"    <input type='submit' name='Day30' id='Tag30' value='30' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                }
                                                else{
                                                    echo"    <input type='submit' name='Day30' id='Tag30' value='30' class='Albo' style='margin: 2px;'> ";
                                                }
                                        
                                            }
                                            else{
                                                if (intval($DaysInMonth) == 31){
                                                    $QueryDate1->execute();
                                                    $r1 = $QueryDate1->get_result();
                                                    $result1 = $r1->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result1['T1']) && !empty($result1['T2']) && !empty($result1['T3']) && !empty($result1['T4']) && !empty($result1['T5'])){  
                                                        echo"    <input type='submit' name='Day1' id='Tag1' value='1' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day1' id='Tag1' value='1' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate2->execute();
                                                    $r2 = $QueryDate2->get_result();
                                                    $result2 = $r2->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result2['T1']) && !empty($result2['T2']) && !empty($result2['T3']) && !empty($result2['T4']) && !empty($result2['T5'])){
                                                        echo"    <input type='submit' name='Day2' id='Tag2' value='2' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day2' id='Tag2' value='2' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate3->execute();
                                                    $r3 = $QueryDate3->get_result();
                                                    $result3 = $r3->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result3['T1']) && !empty($result3['T2']) && !empty($result3['T3']) && !empty($result3['T4']) && !empty($result3['T5'])){
                                                        echo"    <input type='submit' name='Day3' id='Tag3' value='3' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day3' id='Tag3' value='3' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate4->execute();
                                                    $r4 = $QueryDate4->get_result();
                                                    $result4 = $r4->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result4['T1']) && !empty($result4['T2']) && !empty($result4['T3']) && !empty($result4['T4']) && !empty($result4['T5'])){
                                                        echo"    <input type='submit' name='Day4' id='Tag4' value='4' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day4' id='Tag4' value='4' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate5->execute();
                                                    $r5 = $QueryDate5->get_result();
                                                    $result5 = $r5->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result5['T1']) && !empty($result5['T2']) && !empty($result5['T3']) && !empty($result5['T4']) && !empty($result5['T5'])){
                                                        echo"    <input type='submit' name='Day5' id='Tag5' value='5' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day5' id='Tag5' value='5' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate6->execute();
                                                    $r6 = $QueryDate6->get_result();
                                                    $result6 = $r6->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result6['T1']) && !empty($result6['T2']) && !empty($result6['T3']) && !empty($result6['T4']) && !empty($result6['T5'])){
                                                        echo"    <input type='submit' name='Day6' id='Tag6' value='6' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day6' id='Tag6' value='6' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate7->execute();
                                                    $r7 = $QueryDate7->get_result();
                                                    $result7 = $r7->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result7['T1']) && !empty($result7['T2']) && !empty($result7['T3']) && !empty($result7['T4']) && !empty($result7['T5'])){
                                                        echo"    <input type='submit' name='Day7' id='Tag7' value='7' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day7' id='Tag7' value='7' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate8->execute();
                                                    $r8 = $QueryDate8->get_result();
                                                    $result8 = $r8->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result8['T1']) && !empty($result8['T2']) && !empty($result8['T3']) && !empty($result8['T4']) && !empty($result8['T5'])){
                                                        echo"    <input type='submit' name='Day8' id='Tag8' value='8' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day8' id='Tag8' value='8' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate9->execute();
                                                    $r9 = $QueryDate9->get_result();
                                                    $result9 = $r9->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result9['T1']) && !empty($result9['T2']) && !empty($result9['T3']) && !empty($result9['T4']) && !empty($result9['T5'])){
                                                        echo"    <input type='submit' name='Day9' id='Tag9' value='9' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day9' id='Tag9' value='9' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    $QueryDate10->execute();
                                                    $r10 = $QueryDate10->get_result();
                                                    $result10 = $r10->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result10['T1']) && !empty($result10['T2']) && !empty($result10['T3']) && !empty($result10['T4']) && !empty($result10['T5'])){
                                                        echo"    <input type='submit' name='Day10' id='Tag10' value='10' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day10' id='Tag10' value='10' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate11->execute();
                                                    $r11 = $QueryDate11->get_result();
                                                    $result11 = $r11->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result11['T1']) && !empty($result11['T2']) && !empty($result11['T3']) && !empty($result11['T4']) && !empty($result11['T5'])){
                                                        echo"    <input type='submit' name='Day11' id='Tag11' value='11' class='Albo' disabled='disabled' style='margin: 2px;  background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day11' id='Tag11' value='11' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate12->execute();
                                                    $r12 = $QueryDate12->get_result();
                                                    $result12 = $r12->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result12['T1']) && !empty($result12['T2']) && !empty($result12['T3']) && !empty($result12['T4']) && !empty($result12['T5'])){
                                                        echo"    <input type='submit' name='Day12' id='Tag12' value='12' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day12' id='Tag12' value='12' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate13->execute();
                                                    $r13 = $QueryDate13->get_result();
                                                    $result13 = $r13->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result13['T1']) && !empty($result13['T2']) && !empty($result13['T3']) && !empty($result13['T4']) && !empty($result13['T5'])){
                                                        echo"    <input type='submit' name='Day13' id='Tag13' value='13' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day13' id='Tag13' value='13' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate14->execute();
                                                    $r14 = $QueryDate14->get_result();
                                                    $result14 = $r14->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result14['T1']) && !empty($result14['T2']) && !empty($result14['T3']) && !empty($result14['T4']) && !empty($result14['T5'])){
                                                        echo"    <input type='submit' name='Day14' id='Tag14' value='14' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day14' id='Tag14' value='14' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate15->execute();
                                                    $r15 = $QueryDate15->get_result();
                                                    $result15 = $r15->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result15['T1']) && !empty($result15['T2']) && !empty($result15['T3']) && !empty($result15['T4']) && !empty($result15['T5'])){
                                                        echo"    <input type='submit' name='Day15' id='Tag15' value='15' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day15' id='Tag15' value='15' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate16->execute();
                                                    $r16 = $QueryDate16->get_result();
                                                    $result16 = $r16->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result16['T1']) && !empty($result16['T2']) && !empty($result16['T3']) && !empty($result16['T4']) && !empty($result16['T5'])){
                                                        echo"    <input type='submit' name='Day16' id='Tag16' value='16' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day16' id='Tag16' value='16' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate17->execute();
                                                    $r17 = $QueryDate17->get_result();
                                                    $result17 = $r17->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result17['T1']) && !empty($result17['T2']) && !empty($result17['T3']) && !empty($result17['T4']) && !empty($result17['T5'])){
                                                        echo"    <input type='submit' name='Day17' id='Tag17' value='17' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day17' id='Tag17' value='17' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate18->execute();
                                                    $r18 = $QueryDate18->get_result();
                                                    $result18 = $r18->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result18['T1']) && !empty($result18['T2']) && !empty($result18['T3']) && !empty($result18['T4']) && !empty($result18['T5'])){
                                                        echo"    <input type='submit' name='Day18' id='Tag18' value='18' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day18' id='Tag18' value='18' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate19->execute();
                                                    $r19 = $QueryDate19->get_result();
                                                    $result19 = $r19->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result19['T1']) && !empty($result19['T2']) && !empty($result19['T3']) && !empty($result19['T4']) && !empty($result19['T5'])){
                                                        echo"    <input type='submit' name='Day19' id='Tag19' value='19' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day19' id='Tag19' value='19' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate20->execute();
                                                    $r20 = $QueryDate20->get_result();
                                                    $result20 = $r20->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result20['T1']) && !empty($result20['T2']) && !empty($result20['T3']) && !empty($result20['T4']) && !empty($result20['T5'])){
                                                        echo"    <input type='submit' name='Day20' id='Tag20' value='20' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day20' id='Tag20' value='20' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate21->execute();
                                                    $r21 = $QueryDate21->get_result();
                                                    $result21 = $r21->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result21['T1']) && !empty($result21['T2']) && !empty($result21['T3']) && !empty($result21['T4']) && !empty($result21['T5'])){
                                                        echo"    <input type='submit' name='Day21' id='Tag21' value='21' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day21' id='Tag21' value='21' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate22->execute();
                                                    $r22 = $QueryDate22->get_result();
                                                    $result22 = $r22->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result22['T1']) && !empty($result22['T2']) && !empty($result22['T3']) && !empty($result22['T4']) && !empty($result22['T5'])){
                                                        echo"    <input type='submit' name='Day22' id='Tag22' value='22' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day22' id='Tag22' value='22' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate23->execute();
                                                    $r23 = $QueryDate23->get_result();
                                                    $result23 = $r23->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result23['T1']) && !empty($result23['T2']) && !empty($result23['T3']) && !empty($result23['T4']) && !empty($result23['T5'])){
                                                        echo"    <input type='submit' name='Day23' id='Tag23' value='23' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day23' id='Tag23' value='23' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate24->execute();
                                                    $r24 = $QueryDate24->get_result();
                                                    $result24 = $r24->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result24['T1']) && !empty($result24['T2']) && !empty($result24['T3']) && !empty($result24['T4']) && !empty($result24['T5'])){
                                                        echo"    <input type='submit' name='Day24' id='Tag24' value='24' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day24' id='Tag24' value='24' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate25->execute();
                                                    $r25 = $QueryDate25->get_result();
                                                    $result25 = $r25->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result25['T1']) && !empty($result25['T2']) && !empty($result25['T3']) && !empty($result25['T4']) && !empty($result25['T5'])){
                                                        echo"    <input type='submit' name='Day25' id='Tag25' value='25' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day25' id='Tag25' value='25' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate26->execute();
                                                    $r26 = $QueryDate26->get_result();
                                                    $result26 = $r26->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result26['T1']) && !empty($result26['T2']) && !empty($result26['T3']) && !empty($result26['T4']) && !empty($result26['T5'])){
                                                        echo"    <input type='submit' name='Day26' id='Tag26' value='26' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day26' id='Tag26' value='26' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate27->execute();
                                                    $r27 = $QueryDate27->get_result();
                                                    $result27 = $r27->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result27['T1']) && !empty($result27['T2']) && !empty($result27['T3']) && !empty($result27['T4']) && !empty($result27['T5'])){
                                                        echo"    <input type='submit' name='Day27' id='Tag27' value='27' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day27' id='Tag27' value='27' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate28->execute();
                                                    $r28 = $QueryDate28->get_result();
                                                    $result28 = $r28->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result28['T1']) && !empty($result28['T2']) && !empty($result28['T3']) && !empty($result28['T4']) && !empty($result28['T5'])){
                                                        echo"    <input type='submit' name='Day28' id='Tag28' value='28' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day28' id='Tag28' value='28' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate29->execute();
                                                    $r29 = $QueryDate29->get_result();
                                                    $result29 = $r29->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result29['T1']) && !empty($result29['T2']) && !empty($result29['T3']) && !empty($result29['T4']) && !empty($result29['T5'])){
                                                        echo"    <input type='submit' name='Day29' id='Tag29' value='29' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day29' id='Tag29' value='29' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate30->execute();
                                                    $r30 = $QueryDate30->get_result();
                                                    $result30 = $r30->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result30['T1']) && !empty($result30['T2']) && !empty($result30['T3']) && !empty($result30['T4']) && !empty($result30['T5'])){
                                                        echo"    <input type='submit' name='Day30' id='Tag30' value='30' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='Day30' id='Tag30' value='30' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                    
                                                    $QueryDate31->execute();
                                                    $r31 = $QueryDate31->get_result();
                                                    $result31 = $r31->fetch_array(MYSQLI_ASSOC);
                                                    if(!empty($result31['T1']) && !empty($result31['T2']) && !empty($result31['T3']) && !empty($result31['T4']) && !empty($result31['T5'])){
                                                        echo"    <input type='submit' name='Day31' id='Tag31' value='31' class='Albo' disabled='disabled' style='margin: 2px; background-color: #A9A9A9;'> ";
                                                    }
                                                    else{
                                                        echo"    <input type='submit' name='31' id='31' value='31' class='Albo' style='margin: 2px;'> ";
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    
                                    for ($i = 1; $i <= intval(($DaysLeftover)); $i++){
                                        echo"
                                            <input type='submit' name='Text.$i' id='text.$i' value='' class='Albo' style='margin: 2px; background-color: #FFFFFF' disabled>
                                        ";
                                    }
                                    
                                    mysqli_close($conn);
?>