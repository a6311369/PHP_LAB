<html>
   <body>
      <head><title>留言版</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      </head>
      <form method = "post" action = "insert.php">
         留言板-v3<p><hr>
         <br>
	    暱稱:<br>
         <input type = "text" name = "bname"><p>
            留言:<br>
         <textarea rows="10" cols="20" name="bcontent">
         </textarea><p>
         <input type = "submit" value="送出留言" />
         <input type = "reset"  value="清空留言" />
         <input type="button" name="Submit" value="查詢留言" class="btn" onclick="location.href='list.php'" />
      </form>
   </body>
</html>
