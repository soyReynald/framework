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
        <h1>This is a view coming from the Home controller and the Index method</h1>
        <pre>
        <?php 
            // This is just learning purposes:
            
            print_r($tasks); 

            //print_r(Messages::getMsg());
        ?>
        <?php 
            // Learning purposes:
            Messages::clearMsg(); ?>
        </pre>
    </div>
</body>
</html>