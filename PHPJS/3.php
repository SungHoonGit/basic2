<!DOCTYPE html>
<html>
<head>
  <title>Error 잡기</title>
	<meta charset="utf-8">
</head>
<body>
  <script charset="utf-8">
    document.write("hello world");
  </script>
  <?php
     echo "Error Check";
   ?>
   <!-- logs.파일에 error.log 로 디버깅 가능  -->

   <!-- 디버깅 화면표시
        php.ini 파일에서
        display_errors : on/ off

        WAMP manager 실행
        메뉴 manage servers 들어가.
        Apache Web Server 을 Restart

    -->
</body>
</html>
