<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en" xmlns:http="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php
    session_start();
    ?>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://123.207.244.139">首页</a>
                </button>
            </div>
        </div>
    </nav>

    <div class="container">
        <br/><br/>
    </div>

    <div class="jumbotron container">
        <div class="container">
            <form action="info.php">
                <div class="form-group">
                    <label><h2>感谢你能来留言呀^-^</h2></label>
                    <input class="form-control" type="text" name="msg"/>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="确定"/>
                </div>
            </form>
            <div class="row">
                <form action="">
                    <div class="col-md-9"></div>
                    <div class="col-md-1">
                        <a href="msg.php?type=-1">
                            <input class="btn btn-primary" type="submit" value="上一天"/>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <a href="msg.php?type=0">
                            <input class="btn btn-primary" type="submit" value="今天"/>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <a href="test.php?type=1">
                            <input class="btn btn-primary" type="submit" value="下一天"/>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="jumbotron container">
        <div class="row container">
            <p>
                <?php
                if($_GET['type']) {
                    echo 'exist';
                    $type = $_SESSION['type'] = $_GET['type'];
                    echo $type;
                }
                $filename = date("Y-m-d").".txt";
                $data = date("Y-m-d");
                echo '日期: '.$data.'<br/>'.'<br/>';

                echo "昨天: ".date("Y-m-d",strtotime("-1 day")), "<br>";

                $handle = fopen($filename, 'r') ;
                if ($handle) {
                    while(!feof($handle)){
                        echo fgets($handle, 1024);
                        echo '<br/>';
                    }
                    fclose($handle);
                }
                ?>
            </p>
        </div>
    </div>
</body>
</html>