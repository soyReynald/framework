<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('http://framework.local/public/css/bootstrap.css');
    </style>
</head>
<body>
    <div class="container">
        <h1>This is a view coming from the Home index</h1>
        <h3><?= $company ?></h3>
        <h3><?= $web ?></h3>
        <h3><?= $address ?></h3>
    </div>
</body>
</html>