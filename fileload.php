<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>[随手记]列表</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/pub/css/main.css" media="all">
        <script type="text/javascript" src="__PUBLIC__/pub/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src=""></script>
    </head>
<body>
<form action="getfile.php" method="post" enctype="multipart/form-data">
<input type="file" name="pics" value="选择图片"/>
<input type="submit" style="width:50px;font-size:1.2em" required>
</form>
</body>
<script type="text/javascript">
$('#top').click(function(){$('html,body').animate({scrollTop: '0px'}, 10);return false;});
$('#foot').click(function(){$('html,body').animate({ scrollTop: $(document).height() }, 10); return false;});
</script>
</html>