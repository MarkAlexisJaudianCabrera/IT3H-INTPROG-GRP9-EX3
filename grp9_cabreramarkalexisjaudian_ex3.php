<!--
    Name: Mark Alexis Jaudian Cabrera
    Section: BSIT-IT3H-IRREGULAR
    Subject: INTPROG-IT3H
    Group: 9
    Exercise #3
-->

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Excercise 3</title>
        <style>
            body{
                text-align: justify;
                align-items: center;
                background-color: #003595;
                color: #000;
                font-family: 'Poppins', sans-serif;
            }
            .php-body{
                max-height: 100% !important;
                width: 20%;
                padding: 1rem;
                margin-top: .5rem;
                border-radius: 1rem;
                border-color: #003595 2px solid;
                box-shadow: 0 4px 1rem rgba(134, 133, 133, 0.5);
                background-color: aliceblue;
            }
            .btn-styles{
                font-weight: bold;
                font-size: 1rem;
                border-radius: 1.5rem;
                text-align: justify;
                background: #FFC70A;
                border: none;
                color: #003595;
                padding: 1rem;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                box-shadow: 0 4px 1rem rgba(134, 133, 133, 0.5);
            }
            .btn-styles:hover{
                background-color: #D1B48C;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <button class="btn-styles" type="submit" name="submit">Open</button>
            <button class="btn-styles" type="clear" name="clear">Close</button>
        </form>
        <div class="php-body">
            Choose From Buttons Above
            <hr>
            <?php 
                $str = file_get_contents('report.txt'); //para makuha yung laman ng file para ilagay sa new file
                $rep_file1 = file("report.txt")[0]; // kinukuha yung 1st line sa file 
                $rep_file2 = file("report.txt")[1]; // kinukuha yung 2nd line sa file 
                $rep_file3 = file("report.txt")[2]; // kinukuha yung 3rd line sa file 
                $rep_all = "<ol><li>".$rep_file1."</li><li>".$rep_file2."</li><li>".$rep_file3."</li></ol>"; //listing para sa nakuhang lines sa file

                $clear_rep_all = ""; //initialize para ma clear yung display
                $final_report = $clear_rep_all; //pagpalit sa value ng final_report para ma clear yung display
                $display_rep_all = "<h2><b>The File does Exist.</b></h2><p>These are the lines inside the File:<br>$rep_all</p>"; //initialize para ma display yung lines
                
                if(isset($_POST['submit'])){ //if else statement para sa open button(if true magdidisplay ung lines)
                    if(file_exists('report.txt')){
                        $final_report = $display_rep_all;
                        file_put_contents('newreport.text',$str);
                    }else{
                        echo "<p> No lines are selected, button was not pressed, or File does not exist. </p>";
                    }
                }else if(isset($_POST['clear'])){  //if else statement para sa close button(if true magcleclear ung lines)
                    $final_report = $clear_rep_all;
                }
                echo $final_report 
            ?>
        </div>
    </body>
</html>