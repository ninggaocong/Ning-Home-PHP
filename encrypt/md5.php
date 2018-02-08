<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>md5加密</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>


<div class="jumbotron container">
    <!--<form class="" action="upload.php" method="post">-->
    <!--<div class="form-group">-->
    <!--<input type="file" name="file" value="">-->
    <!--</div>-->
    <!--<div class="form-group">-->
    <!--<button class="btn btn-primary" type="submit" name="" value="upload">上传</button>-->
    <!--</div>-->
    <!--</form>-->
    <form action="md5.php" method="post"
          enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">输入数据</label>
            <input type="name" class="form-control" name="key" id="name" placeholder="name">
        </div>

        <div class="form-gruop">
            <input class="btn btn-primary" type="submit" name="加密" value="加密" />
        </div>
    </form>
    <!--<a herf=""></a>-->

</div>

<div class="container">
<?php
    echo '<br/>';

    if ($_POST['key']) {

    $str = $_POST['key'];
    //echo md5($str);
    echo '要加密的数据为 : '.$str;
    echo '<br/>';

    echo '加密后的数据为 : '.substr(md5($str), 0, 16);

    }

?>

</div>

</body>
</html>
