<?php
  /**
   * 图片上传处理
   * @author ChaoLee
   */
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
  // header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");
  // header("Content-type:application/json; charset=UTF-8");
  // $sourcePath = 'http://118.24.53.34/api/upload/';
  // // 配置文件需要上传到服务器的路径，需要允许所有用户有可写权限，否则无法上传成功
  // $uploadPath = 'source/images/';
  // 获取提交的图片数据
  print_r(split(',', $_POST['fileName']));
  // if (!isset($_POST['fileName'])) {
  //   $result = array('code' => 417, 'msg' => '缺少文件名' );
  //   exit(json_encode($result));
  // }
  // if (!isset($_POST['articleId'])) {
  //   $result = array('code' => 417, 'msg' => '缺少文章id' );
  //   exit(json_encode($result));
  // }
  // $fileName = $_POST['fileName'];
  // $articleId = $_POST['articleId'];
  
  // $result = array('code' => 0, 'articleId' => $articleId, 'fileName' => $fileName );
  // exit(json_encode($result));
  // print_r($file);
  // 获取图片回调路径
  // $callbackUrl = $_POST['callbackUrl'];
?>