<?php
  $name = "egoing";          //php 변수설정
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>변수</title>
	<meta charset="utf-8">
</head>
<body>
  <h1>javascript</h1>
  <script charset="utf-8">
  name = "egoing";            // JS 변수설정
  document.write("안녕하세요"+name);
  </script>

  <h1>php</h1>
  <?php
    echo "안녕히세요.".$name;  //문자 . 문자
   ?>
   <hr>

   <span>변수를 쓰는 이유? 많은이유가 있지만,<br>
     프로그램을 최대한 바꾸지 않게 하기 위하여.
   </span>
</body>
</html>
