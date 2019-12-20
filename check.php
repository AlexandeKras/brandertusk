<?php
$mysqli = new mysqli('localhost', 'root', '', 'brander');
$nastroy =filter_var(trim($_POST["teamlead"]),FILTER_SANITIZE_STRING);
$djun =filter_var(trim($_POST["djun"]),FILTER_SANITIZE_STRING);
$sql = "INSERT INTO company (nastroy,djun) VALUES ('$nastroy','$djun')";
$result= $mysqli->query($sql);
$affected = $mysqli->affected_rows;

if( $djun == 0){
    if($nastroy == 1 ){
        echo 'Нормальном настрое<br/>';
        echo 'Ладно сойдет!<br/>';
    }if($nastroy == 2 ){
        echo 'Плохом настрое<br/>';
        echo 'Накаляешь!<br/>';
    }
    if($nastroy == 3 ){
        echo 'Состояние «не попадись на глаза<br/>';
        echo 'Ну держись!<br/>';
    }
    if($nastroy == 4 ){
        echo 'Состояние «не попадись на глаза<br/>';
        echo 'Ну держись!<br/>';
    }}
else{
    if($nastroy == 1 ){
        echo 'Хорошем настрое<br/>';
        echo 'Моя школа!<br/>';
    }if($nastroy == 2 ){
        echo 'Хорошем настрое<br/>';
        echo 'Моя школа!<br/>';
    }
    if($nastroy == 3 ){
        echo 'Нормальном<br/>';
        echo 'Ладно сойдет!<br/>';
    }
    if($nastroy == 4 ){
        echo 'Плохом настрое<br/>';
        echo 'Накаляешь!<br/>';
    }
}
?>
<html lang="ru">

<body>
<div class="container mt-4">
    <form  action="index.phtml" method="post">
        <button type="submit" id="saveUser" name="submitData" class="btn btn-success" onclick="myfunc()"> Вернутся в меню</button>
    </form>
    <div id="errorMessage"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/form.js">
</script>
</body>
</html>