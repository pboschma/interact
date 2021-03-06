<html lang="en" id="startpage">
<?php require_once("../../Include.php") ?>
<head>
    <meta charset="UTF-8">
    <title>InterAct</title>
    <script src="../../assets/js/jQuery/jquery.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/materialize/css/materialize.css">
    <link rel="stylesheet" href="../../assets/styles/custom/css/menu.css">
    <script src="../../assets/styles/materialize/js/materialize.js"></script>
</head>
<body>
<header>
    <div class="col s12" style="text-align:center">
        <h4>
            <b>
                <span class="black-text">I N T E R</span>
                <span class="white-text"> A C T</span>
            </b>
        </h4>
    </div>
</header>
<div id="loginPanelWrapper" class="row container">
    <div class="card white col s12 center-align">
        <div class="card-content" style="padding: 50px">
            <h4>Login</h4>
            <br>
            <form method="post" id="loginForm" action="../../classes/base/login/Login.php">
                <div class="row">
                    <div class="input-field">
                        <input placeholder="Benutzername" id="userName" type="text" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Passwort" id="password" type="password" class="validate" required>
                    </div>
                </div>
            </form>
            <div class="right row s12 m12" style="margin-bottom:100px;">
                <div class="col s12 m5 left" style="margin-bottom: 20px">
                    <a href="../../views/forgot_password/forgot-password.php" class="grey-text">Passwort vergessen?</a>
                </div>
                <div class="col s12 m7">
                    <div class="col s12 m8" style="margin-bottom: 20px">
                        <a class="btn black">Registrieren</a>
                    </div>
                    <div class="col s12 m4" style="margin-bottom: 20px">
                        <a class="btn green">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>