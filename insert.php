<!doctype html>
<html>
<head><title>留言寫入Mysql</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
    //偵錯
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);

    //接收變數
    $name=$_POST[bname];
    $content=$_POST[bcontent];
    
    //echo $name;
    //echo $$content;
    //資料庫資訊
    $servername = "127.0.0.1";
    $username = "root";
    $password = "!Q2w3e4R";
    
    //creat db session
    $conn = new mysqli($servername, $username, $password);
    //test connection
    //if ($conn->connect_error) {
    //  die("連接失敗: " . $conn->connect_error);
    //}
    //echo "連接成功";
    //insert data

    $sql="INSERT INTO message.msg(name,descr) VALUES ('$name','$content')";
    //判斷寫入DB是否正常
    if ($conn->query($sql) === TRUE) {
        echo "<h3> 留言成功 </h3>";
    } else {
        echo "<h3> 留言失敗,暱稱重複 </h3>";
    }
    //關閉連線
    mysqli_close($conn);

    include("message.php");         //資料存入SQL後 回message頁面
?>
</body>
</html>
