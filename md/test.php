<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>MD</title>
    <script type="application/javascript"
            src="https://cdn.rawgit.com/showdownjs/showdown/1.8.6/dist/showdown.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    </div>
    <div class="jumbotron">
        <div class="container">
            <?php
            $str = "DATA.md";
            $f = fopen($str, "r") or die('打开文件失败');
            echo '<p id="test">' . fread($f, filesize($str)) . '</p>';
            fclose($f);
            ?>
        </div>
    </div>

    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

    </div>
</div>


<script type="application/javascript">
    //    var showdown  = require('showdown'),
    converter = new showdown.Converter();
    //        text      = '#hello, markdown!';
    var element = document.getElementById("test");
    text = element.textContent;
    html = converter.makeHtml(text);

    element.innerHTML = html;
</script>

</body>
</html>