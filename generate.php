<html>

<head>
    <title>Welcome</title>
</head>

<body>
    <h1>Your message is encrypted by <?php echo $_GET["algo"]; ?> algorithm</h1>
    <h4><?php echo $_GET["algo"]; ?> hash key:- </h4>
    <textarea style="width:400px;">
    <?php
    echo hash($_GET["algo"],$_GET["msg"]);    
    ?>
    </textarea><br><br>
    <h4> Original Message:-</h4>
    <textarea style="width:400px;"><?php echo $_GET["msg"]; ?></textarea><br>
</body>

</html>