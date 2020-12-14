<?php
        echo"
                <div class='tab'>
                    <form action='BookingKalendar.php' method='Post'>
                        <input type='text' value=$WeitergebenRück name='WeiterRückValue' style='display: none;'>
                        <button type='submit' name='WeiterRück'><i class='fa fa-angle-double-left' style='font-size: 35px;'></i></button>
                    </form>
                </div>
                ";
?>             
                <div id=1 class="tabcontent" style="max-height: 1200px; max-width: 1390px; margin: auto; flex-direction: column;">
<?php
                    include 'BookingTabcontent.php';
?>
                </div>
                            
<?php
            echo"
                <div class='tab'>
                    <form action='BookingKalendar.php' method='Post'>
                        <input type='text' value=$WeitergebenVor name='WeiterVorValue' style='display: none;'>
                        <button type='submit' name='WeiterVor'><i class='fa fa-angle-double-right' style='font-size: 35px;'></i></button>
                    </form>
                </div>
            ";
?>

                
            </section>