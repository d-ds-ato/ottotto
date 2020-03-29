<?php
  include 'includes/login.php';
  $fp=fopen("info.txt","r");
  $line=array();
  if($fp){
    while(!feof($fp)){
      $line[]=fgets($fp);
    }
    fclose($fp);
  }?>
    <html>
    <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8">
      <title>テニスサークル</title>
    </head>
    <body>
      <h1>テニスサークル交流サイト</h1>
      <p><a href="index.php">トップページに戻る</a></p>
      <h2>お知らせ</h2>
      <?php
      $u=count($line);
      if(count($line)>0){
        for($i=0; $i < count($line) ; $i++){
          if($i==0){
              echo '<h3>'.$line[0].'</h3>';

          }else{
              echo $line[$i].'<br>';
              }
        }
      }else{
              echo 'お知らせはありません。';
      }

      ?>
    </body>
    </html>
