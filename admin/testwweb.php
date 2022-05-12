<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Demo CKEditor</title>
   <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
   <h1>Demo CKEditor</h1>
   <form method="POST" action="themsp.php" enctype="multipart/form-data" class="form-horizontal">
      <textarea name="ten" id="ten"></textarea>
      <script>CKEDITOR.replace('ten');</script>
   </form>
</body>
</html>