<?php
    //偵錯
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);

    //接收變數
    $modID=$_POST[modID];              //要修改的ID
    $modcontent=$_POST[modcontent];    //要修改的內容

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
    if ($conn->connect_error) {
      die("連接失敗: " . $conn->connect_error);
    }
    echo "連接成功";
    
    $sql = "UPDATE msg SET `descr` = '$modcontent' WHERE `name` = '$modID'";

    if ($conn->query($sql) === TRUE) {
      // echo "留言修改成功";
    } 
    else {
       //echo "留言修改失敗";
    }



    //關閉連線
    $conn->close();

    //include("list.php");         //資料存入SQL後 回message頁面
    include("list.php");
?>
