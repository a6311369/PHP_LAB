<!doctype html>
<html>
<head><title>顯示資料</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
   <?php
       //偵錯
       //error_reporting(E_ALL);
       //ini_set('display_errors', 1);

       $servername = "127.0.0.1";
       $username = "root";
       $password = "!Q2w3e4R";

       $conn = new mysqli($servername, $username, $password);

 
       $sql="SELECT * FROM message.msg";
       $result = mysqli_query($conn, $sql);

       //while shoe data
       echo 留言內容;
       echo "<p>";
       echo "<table width=400 border=1>";
     
          while($bb=mysqli_fetch_array($result, MYSQLI_NUM)){
           echo "<tr><td>$bb[0]"." 留言 : "."$bb[1]</td></tr>";
          }
       echo "</table>";
       
   ?>
   <hr>
   <!--刪除留言-->
   <form action="del.php" method="post"> 要刪除留言的暱稱 :  <input type="text" name="delID" />
　    <input type="submit" value="刪除留言"/><p><hr>
   </form>
   <!--修改留言-->
   <form method = "post" action = "modify.php">
      修改留言<p>
      要修改留言的暱稱:<br>
      <input type = "text" name = "modID"><p>
         要修改的留言:<br>
      <textarea rows="10" cols="20" name="modcontent"></textarea><br>
      <input type = "submit" value="修改留言" /><p><hr>
   </form>
  <!--返回留言版 --> 
   <input type="button" name="Submit" value="返回留言版" class="btn" onclick="location.href='message.php'" /><p> 
</form>
</body>
</html>
