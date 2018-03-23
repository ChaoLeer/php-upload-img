<?php
  header("Access-Control-Allow-Origin:*");
  /*星号表示所有的域都可以接受，*/
  header("Access-Control-Allow-Methods:GET,POST,PUT,DELETE,OPTIONS");

  //其实写到这基本后面就是基本的参数接收了
  //获取图片的临时路径
  if (isset($_FILES["file"])) {
    $image = $_FILES["file"]['tmp_name'];
    //只读方式打开图片文件
    $fp = fopen($image, "r");
    //读取文件（可安全用于二进制文件）
    $file = fread($fp, $_FILES["file"]["size"]); //二进制数据流

    //获取时间
    $date_info = getdate();
    $year = $date_info['year'];
    $mon = $date_info['mon'];
    //上传路径
    $dir_url = '../images/test/';
    //检测目录是否存在，不存在则建立目录
    if (is_dir($dir_url)) {

    } else {
        mkdir($dir_url, 0777, true);
    }

    //生成初始化文件名
    $filename= $_FILES["file"]['name'];
    //获取后缀
    $type = explode('.',$_FILES["file"]['name']);

    //新图片的路径
    $newFilePath = $dir_url.$filename.'.'.$type[1];
    $data = $file;
    $newFile = fopen($newFilePath,"w"); //打开文件准备写入
    fwrite($newFile,$data); //写入二进制流到文件
    fclose($newFile); //关闭文件
  } else {
    $response = array('code' => 417, 'msg' => '未传入文件');
    exit(json_encode($response));
  }
?>