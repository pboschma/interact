<html lang="en" id="startpage">
<head>
    <meta charset="UTF-8">
    <title>InterAct</title>
    <script src="../../assets/js/jQuery/jquery.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/materialize/css/materialize.css">
    <link rel="stylesheet" href="../../assets/styles/custom/css/menu.css">
    <script src="../../assets/styles/materialize/js/materialize.js"></script>
    <script src="../../js/createUser.js"></script>
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
            <h4>Registrierung</h4>
            <br>
            <form method="post" id="registerForm" action="../../classes/base/save/createUser.php">
                <div class="row">
                    <div class="input-field">
                        <input name="mail" placeholder="E-Mail" id="mail" type="email" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input name="first_name" placeholder="Vorname" id="first_name" type="text" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input name="last_name" placeholder="Nachname" id="last_name" type="text" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input name="password" placeholder="Passwort" id="password" type="password" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input name="passwordRepeat" placeholder="Passwort wiederholen" id="repeat_password" type="password" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input name="registerId" value="register" id="registerId" type="hidden">
                    </div>
                </div>
                <div class="right row s12 m12" style="margin-bottom:100px;">
                    <div class="col s12 m5" style="margin-bottom: 20px">
                        <div class="col s12 m12" style="margin-bottom: 20px">
                            <input name="register" type="submit" class="btn green" value="Registrieren">
                        </div>
                    </div>
                </div>
                <div class="row s12">
                    <div class="col s12 m12 center" style="margin-bottom: 20px">
                        <a href="../../views/login/login.php" class="black-text">Login</a>&nbsp;
                        <a href="../../views/forgot_password/forgot-password.php" class="grey-text">Passwort vergessen?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>