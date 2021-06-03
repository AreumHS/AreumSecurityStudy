<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
?>
<header>
    <title>아름고 모의해킹</title>
</header>

<style>
    body{
        margin: 0;
        padding: 0;
        border: 0;
        background-image: url("bg.gif");
        background-position: center;
        background-size: cover;
    }
    .field{
        background: linear-gradient( to right, #D75615, #EB7945 ); width: 768px; padding: 16px; border-radius: 24px; margin: 32 auto;
    }
    .field h1{ color: #FFF; margin-bottom: 16px; margin-top: 0;}
    .field textarea{
        width: 100%;
        min-height: 150px;
        padding: 12px;
        border-radius: 12px;
        font-size: 18px;
        border: 0;
    }
    .field button{
        width: 100px;
        height: 33px;
        background: #FFF;
        border: none;
        border-radius: 12px;
        margin-top: 16px;
    }

    .output{
        background: linear-gradient( to right, #D75615, #EB7945 ); width: 768px; padding: 16px; border-radius: 24px; margin: 32 auto;
    }
    .tmp{
        color: #fff; margin-bottom: 16px; margin-top: 0;
    }
    .ans{
        width: 100%;
        border-radius: 12px;
        padding: 12px;
        min-height: 300px;
        background-color: #FFF;
        box-sizing: border-box;
        font-size: 18px;
    }
</style>

<body>
    <div class="field">
        <form method="GET">
            <h1 class="tmp">입력할 내용을 여기에 넣어주세요!</h1>
            <textarea name="value"></textarea><br>
            <button>제출하기</button>
        </form>
    </div>
    <div class="output">
        <h1 class="tmp">출력 결과</h1>
        <div class="ans">
            <?php
                $ans = NULL;
                $ans = $_GET['value'];
                echo $ans;
            ?>
        </div>
    </div>
</body>