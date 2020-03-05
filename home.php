<html>

<head>
    <title>Welcome</title>
</head>

<body>
        <form action="generate.php" method="GET">
            <h1>Hash Keys Generator</h1>
            <br>
            <h4>Enter your message</h4>
            <input name="msg" type="text" placeholder="Your message">
            <br>
            <p>Please select encryption algorithm:</p>
            <input type="radio" id="sha1" name="algo" value="sha1">
            <label for="sha1">sha1</label><br>
            <input type="radio" id="sha256" name="algo" value="sha256">
            <label for="sha256">sha256</label><br>
            <input type="radio" id="md5" name="algo" value="md5">
            <label for="md5">md5</label><br>
            <input type="radio" id="md4" name="algo" value="md4">
            <label for="md4">md4</label>
            <br><br>
            <input type="Submit" value="Generate">
        </form>
</body>

</html>