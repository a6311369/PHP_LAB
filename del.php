<?php
    //偵錯
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);

    //接收變數
    $delID=$_POST[delID];
    //$content=$_POST[bcontent];

    //echo $deldata;
    //echo $$content;
    
    //資料庫資訊
    $servername = "127.0.0.1";
    $username = "root";
    $password = "!Q2w3e4R";
    $dbname = "message";

    //build db session
    $conn = new mysqli($servername, $username, $password, $dbname);
    //test connection
    //if ($conn->connect_error) {
    //  die("連接失敗: " . $conn->connect_error);
    //}
    //echo "連接成功";

    // sql to delete a record
    $sql = "DELETE FROM msg WHERE `name`= '$delID'";
    
    if ($conn->query($sql) === TRUE) {
       //echo "留言刪除成功";
    } else {
       echo "留言刪除失敗，確認有無帶到空白";
    }

    //關閉連線
    $conn->close();

    //include("list.php");         //資料存入SQL後 回message頁面
    include("list.php");
?>
