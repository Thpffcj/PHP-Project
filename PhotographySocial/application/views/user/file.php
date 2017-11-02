<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>摄影社交 登录</title>
</head>

<body>
    <form action="<?php echo site_url('user/upload')?>" method="post" enctype="multipart/form-data">
        <input type="file" name="pic" />
        <input type="submit" value="submit">
    </form>
</body>
</html>