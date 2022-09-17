<?php
        $path = '..';
        $files = scandir($path);
        $fileArr = array();
        $dirArr = array();
        $finalArr = array();

        for($i = 0; $i < count($files); ++$i) {
            $file = $files[$i];

            if (is_file($path . '/' . $file)){
                $file_parts = pathinfo($file);
                $ext = $file_parts['extension'];

                $fulltag = "<td><a href='$path/$file' target='_parent'>";
                switch ($ext) {
                    case "html":$fulltag = $fulltag . "<i class='fa-brands fa-html5 fa-2x'></i></a><a href='$path/$file' target='_parent' class='link'>"; break;
                    case "php":$fulltag = $fulltag . "<i class='fa-brands fa-php fa-2x'></i></a><a href='$path/$file' target='_parent' class='link'>"; break;
                    case "css":$fulltag = $fulltag . "<i class='fa-brands fa-css3-alt fa-2x'></i></a><a href='$path/$file' target='_parent' class='link'>"; break;
                    default: $fulltag = $fulltag . "<i class='fa-solid fa-file fa-2x'></i></a><a href='$path/$file' target='_parent' class='link'>";
                }
                $fileArr[count($fileArr)] = $fulltag . " $file</a></td>";

            }
            elseif (is_dir($path . '/' . $file)){
                $dirArr[count($dirArr)] = "<td><a href='$path/$file' target='_parent'><i class='fa-solid fa-folder fa-2x'></i></a><a href='$path/$file' target='_parent' class='link'> $file</a></td>";
            }
        }
        
        for($i = 0; $i < count($dirArr); ++$i){
            $finalArr[count($finalArr)] = $dirArr[$i];
        }
        for($i = 0; $i < count($fileArr); ++$i){
            $finalArr[count($finalArr)] = $fileArr[$i];
        }

        for($i = 0; $i < count($finalArr); ++$i) {
            echo "<tr>";
            echo $finalArr[$i];
            $i++;
            if ($i >= count($finalArr)){
                echo "</tr>";
            } else {
                echo $finalArr[$i];
                $i++;
                if ($i >= count($finalArr)){
                    echo "</tr>";
                } else {
                    echo $finalArr[$i];
                    echo "</tr>";
                }
                
            }
        }

        /* for 2
        for($i = 0; $i < count($finalArr); ++$i) {
            echo "<tr>";
            echo $finalArr[$i];
            $i++;
            if ($i >= count($finalArr)){
                echo "</tr>";
            } else {
                echo $finalArr[$i];
                echo "</tr>";
            }
        }*/
    ?>