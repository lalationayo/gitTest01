<?php

 $github_signal = $_SERVER['HTTP_X_HUB_SIGNATURE'];
 list($hash_type,$hash_value) = explode('=', $github_signal,2);
  $payload = file_get_contents("php://input");
  $secret = 'wenhaiCOM.';
  $hash = hash_hmac($hash_type, $payload, $secret);

  if($hash && $hash === $hash_value){
  	   echo '认证成功,开始更新';
  	   echo exec("sh github_auto_pull.sh");
  	   echo date('Y-m-d H:i:s');
  }else{
  	   echo '认证失败';
  }
