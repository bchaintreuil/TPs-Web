<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liste articles</title>
    </head>
    <body>
        <ol>
            <?php
                foreach(scandir("./news") as $dir) {
                    if($dir == "." || $dir == "..") {
                         continue;
                        }
                    if(is_dir("./news/{$dir}")) {
                        echo "<li>{$dir}:<ol>";
                        foreach(glob("./news/{$dir}/*.news") as $file){
                            echo "<li><a href='{$file}'>" . basename($file) . "</a></li>";
                        }
                        echo "</ol></li>";
                    } else {
                        echo "<li><a href='news/{$dir}'>" . basename($dir) . "</a></li>";
                    }
                }
            ?>
        </ol>
    </body>
</html>