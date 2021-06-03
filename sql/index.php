<html lang="kr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>아름고 해킹방어</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
  </head>
  <body>
    <?php
      //error_reporting( E_ALL );
      //ini_set( "display_errors", 1 );

      $id = NULL;
      $pw = NULL;

      $id = $_POST['id'];
      $pw = $_POST['pw'];
      
      if($id == NULL || $pw == NULL){
        echo '
        <main class="form-signin bg-white py-5 rad">
          <form action="" method="POST" class="loginpage">
            <img class="mb-4 logoimage" src="brand/images.png" alt="">
            <h1 class="h3 mb-3 fw-normal">아름고 모의해킹</h1>
    
            <div class="form-floating">
              <input type="text" class="form-control rad" id="id" name="id">
              <label for="id">아이디</label>
            </div>
            <div class="form-floating">
              <input type="text" class="form-control rad" id="pw" name="pw">
              <label for="pw">비밀번호</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary rad" type="submit">로그인</button>
          </form>
        </main>
        ';
      }

      else{
        include ('password.php');
        $mysqli = new mysqli($host, $user, $passwd, $dbName);

        if($mysqli){
          //echo '<script>alert("데이터베이스 접속 성공");</script>';
        } else {
          echo '<script>alert("데이터베이스 접속 실패");</script>';
        }

        $sql = 'SELECT * FROM `data` WHERE id="'.$id.'" AND password="'.$pw.'"';
        
        $cnt = 0;

        echo '<main class="alignleft form-signind bg-white p-5 rad">';
        echo '<h1 class="border-bottom p-1 m-1">데이터베이스 쿼리 결과값</h1>';


        echo '<div class="row">';
        echo '<div class="col-1">수</div>';
        echo '<div class="col-2">아이디</div>';//. $row->password .' / '. $row->magicword .'</li>';
        echo '<div class="col-2">비밀번호</div>';
        echo '<div class="col-7">비밀문구</div>';
        echo '</div>';

        if($res = $mysqli->query($sql)){
          while($row = $res -> fetch_object()) {
            
            $cnt++;
            echo '<div class="row">';
            echo '<div class="col-1">#'. $cnt .'</div>';
            echo '<div class="col-2">'. $row->id .'</div>';//. $row->password .' / '. $row->magicword .'</li>';
            echo '<div class="col-2">'. $row->password .'</div>';
            echo '<div class="col-7">'. $row->magicword .'</div>';
            echo '</div>';
          }
        }

        echo '</main>';

        if($cnt == 0){
          echo '<script>alert("잘못된 아이디/비밀번호 입니다.");</script>';
        }

        echo '<div class="backbutton"><a href="" class="btn btn-dark"><img class="img-fluid" src="redo.png">돌아가기</a></div>';
      }
    ?>
  </body>
</html>