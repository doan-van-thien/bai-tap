<html>

<head>
    <meta charset="utf-8">
    <title>Mail</title>
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <style>
        body {
            padding-left: 20%;
            background-color: #0be6de;
        }
    </style>
</head>

<body>
    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <h1>Email tới bạn!</h1>
        <p>Email</p>
        <input type="text" class="form-control" name="email" placeholder="Email">
        <p>Subject</p>
        <input type="text" class="form-control" name="tieude" placeholder="ten">
        <p>Nội dung</p>
        <textarea name="content" id="editor1" class="form-control"></textarea>
        <script>
            CKEDITOR.replace('editor1');
        </script>
        <p>File đính kèm</p>
        <input type="file" class="form-control" name="file">
        <button type="submit" class="btn btn-primary">Gửi</button>
</body>

</html>