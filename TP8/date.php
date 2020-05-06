<?php 

    function pluriel($d){
        return $d > 1 ? "s" : "";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>
            <?php echo date('d/m/Y');?>
        </title>
    </head>
    <body>
        <p>
            <?php 
                $date = (new DateTime('2020-06-21 00:00:00')) -> diff(new DateTime());
                echo "Avant le 21 Juin 2020, il reste {$date->days} jour". pluriel($date->days) . ", {$date->h} heure" . pluriel($date->h) . ", {$date->i} minute" . pluriel($date->i) . " et {$date->s} seconde" . pluriel($date->s) . ".";
            ?>
        </p>
        <p>
            <?php
                $date = (new DateTime('2019-09-07 00:00:00')) -> diff(new DateTime());
                echo "La rentrée a eu lieu il y a de çà : {$date->days} jour" . pluriel($date->days) . ", {$date->h} heure" . pluriel($date->h) . ", {$date->i} minute" . pluriel($date->i) . " et {$date->s} seconde" . pluriel($date->s) . ".";
            ?>
        </p>
    </body>
</html>