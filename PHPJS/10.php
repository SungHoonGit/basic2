<!-- Array 배열
  어떤 정보를 담는 그릇(변수)
  변수안에는 하나의 값만 담을수 있다.
  배열 안에는 서로 연관되어 있는 여러 정보들을 하나의 배열이라는 그릇에 담아
    체계적으로 관리할수 있다.

  JavaScript    list=new Array("one","two","three");
                list[0];

  php           $list=array("one", "two", "three");
                $list[0];

왜 배열을 써야 하는가?
  변수라 하는 것이 일종의 학교를 비유로 들자면.
    각각의 한명의 학생들을 데이터 라고 비교하자
    편의에 의하셔 반장, 부반장 지정하고 싶을때,
    선생님은 학생들의 이름은 몰라도 지정된 반장을 찾을수 있다...
    1학년, 2학년, 3학년 //1반 2반 3반 ...
    그루핑 하면 관리가 편해진다..
 -->

 <!DOCTYPE html>
 <html>
 <head>
  <title>배열</title>
 	<meta charset="utf-8">
 </head>
 <body>
    <h1>JavaScript</h1>
    <script>
      list = new Array("one", "two", "three");  //만들어진 배열을 리스트에 담어야함.
      document.write(list[2]);          // [] 중괄호
      document.write(list.length);            //배열의 크기
    </script>

    <h1>php</h1>
    <?php
      $list = array("one", "two", "three");
      echo $list[2];
      echo count($list);
     ?>
 </body>
 </html>
