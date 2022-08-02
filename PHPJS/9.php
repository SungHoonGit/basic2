<!-- 반복문
    JavaScript  while(true/false){  }

    PHP         while(true/false){  }

    True 면 반복되고 false 가 올 때 까지
 -->

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 </head>
 <body>
   <h1>JavaScript</h1>
   <ul>
   <script>
   i = 0;
   while( i < 10 ){
     document.write("<li>hellow world</li>");  // <br/> 줄바
     i = i + 1;
   }
   </script>
   </ul>

   <h2>php</h2>
   <ul>
   <?php
    $i = 0;
    while($i < 10){
      echo "<li>hello world </li>";
       // jvs php 웹 위에서 동작하도록 기본적으로 고안되었기 때문에,
      $i = $i + 1 ;
    }
    ?>
  </ul>
 </body>
 </html>
