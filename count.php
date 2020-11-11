<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color:rgb(115, 209, 115);
            }
            div{
                background-color:rgb(255,255,255);
                opacity:0.5;
                text-align:center;
                padding:130px 130px;
                margin-top:250px;
                margin-left:200px;
                margin-right:200px;
                font-size:30px;
            }
        </style>
    </head>
    <body>
        <div>
        <?php
        echo "<strong> Your IP address is: ". $_SERVER['REMOTE_ADDR']."</strong>" ;
        echo "<br>";
        echo "<br>";
        $handle = fopen("counter.txt", "r"); 
        if(!$handle){ 
            echo "could not open the file" ;
            }
        else {
            $counter = (int ) fread($handle,20); 
            fclose ($handle);
            $counter++; 
            echo" <strong> Website visits: ". $counter . " </strong> " ; 
            $handle = fopen("counter.txt", "w" ); 
            fwrite($handle,$counter) ;
            fclose ($handle) ; 
            
        }
        ?>
        </div>

    
    </body>
</html>