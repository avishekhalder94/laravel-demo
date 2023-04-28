<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../css/style.css" rel="stylesheet">
    <!-- <link href="../../css/bootstrapcss/bootstrap.css" rel="stylesheet"> -->
</head>

<body class="body">
    <form action="/login" method="post">
        <span id="title">Sign in</span>
        <input type="text" id="username" name="username" placeholder="Username">
        <input type="password" id="password" name="password" placeholder="Password">
        <div id="button">
            <input type="submit" value="Login">
            <span class="rip1"></span>
            <span class="rip2"></span>
        </div>
        <div id="linksParent">
            <a>Sign up</a>
            <a>Forgot your password?</a>
        </div>
    </form>
</body>

</html>