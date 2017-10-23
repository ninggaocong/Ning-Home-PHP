<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron container">
        <form action="info.php">
            <div class="form-group">
                <input class="form-control" type="text" name="msg"/>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="确定"/>
            </div>
        </form>
    </div>

    <div class="jumbotron container">
        <div class="row container">
            <p>
                <?php
//                    $filename = "2017-10-23.txt";
                    $filename = date("Y-m-d").".txt";
//                    $file = fopen($filename, r) or die("Unable to open file!");
//                    echo fread($file, filesize($filename));
//                    fclose($file);

                    $handle = fopen($filename, 'r');
                    while(!feof($handle)){
                        echo fgets($handle, 1024);
                        echo '<br/>';
                    }
                    fclose($handle);
                ?>
            </p>
        </div>
    </div>
</body>
</html>