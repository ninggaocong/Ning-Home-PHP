<?php
error_reporting(E_ALL || ~E_NOTICE);
define('DS', DIRECTORY_SEPARATOR);
$url = "http://localhost:8082/Ning/src/file/upload/";

class getDirFile{

    //返回数组
    private $DirArray  = array();
    private $FileArray = array();
    private $DirFileArray = array();

    private $Handle,$Dir,$File;

    //获取目录列表
    public function getDir( & $Dir ){
        if( is_dir($Dir) ){
            if( false != ($Handle = opendir($Dir)) ){
                while( false != ($File = readdir($Handle)) ){
                    if( $File!='.' && $File!='..' && !strpos($File,'.') ){
                        $DirArray[] = $File;
                    }
                }
                closedir( $Handle );
            }
        }else{
            $DirArray[] = '[Path]:\''.$Dir.'\' is not a dir or not found!';
        }
        return $DirArray;
    }

    //获取文件列表
    public function getFile( & $Dir ){
        if( is_dir($Dir) ){
            if( false != ($Handle = opendir($Dir)) ) {
                while( false != ($File = readdir($Handle)) ){
                    if( $File!='.' && $File!='..' && strpos($File,'.') ){
                        $FileArray[] = $File;
                    }
                }
                closedir( $Handle );
            }
        }else{
            $FileArray[] = '[Path]:\''.$Dir.'\' is not a dir or not found!';
        }
        return $FileArray;
    }

    //获取目录/文件列表
    public function getDirFile( & $Dir ){
        if( is_dir($Dir) ){
            $DirFileArray['DirList'] = $this->getDir( $Dir );
            if( $DirFileArray ){
                foreach( $DirFileArray['DirList'] as $Handle ){
                    $File = $Dir.DS.$Handle;
                    $DirFileArray['FileList'][$Handle] = $this->getFile( $File );
                }
            }
        }else{
            $DirFileArray[] = '[Path]:\''.$Dir.'\' is not a dir or not found!';
        }
        return $DirFileArray;
    }

}

function constructDownloadPath($name, $path) {
    echo "<p><a href=\"", $path, "\">",$name ,"</a></p>", "\n";
}

//获取url
//$url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["REQUEST_URI"];
//$localurl = dirname($url);

//获取文件路径
$path = dirname(__FILE__);
$path .= "\\upload";

$getDirFile = new getDirFile($path);
$getFile = $getDirFile->getFile( $path);

foreach ($getFile as $p) {
    constructDownloadPath($p, $url . $p);
    echo $url.$p;
}
?>


<!--//获取完整的url-->
<!--echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];-->
<!--echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];-->
<!--#http://localhost/blog/testurl.php?id=5-->
<!---->
<!--//包含端口号的完整url-->
<!--echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];-->
<!--#http://localhost:80/blog/testurl.php?id=5-->
<!---->
<!--//只取路径-->
<!--$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];-->
<!--echo dirname($url);-->
<!--#http://localhost/blog-->
