<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi! <?php echo e($Data->Username); ?></h1><br>
    <h4>You want to change the password, if not you, please ignore the email</h4><br>
    <p>Link reset: http://localhost:8000/KhachHang/<?php echo e($Data->remember_token); ?>/showResetPass</p><br>
</body>
</html>
<?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/Login/mailUser-reset.blade.php ENDPATH**/ ?>