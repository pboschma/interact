<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InterAct</title>
    <script src="assets/js/jQuery/jquery.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/materialize/css/materialize.css">
    <script src="assets/styles/materialize/js/materialize.js"></script>
    <link rel="stylesheet" href="assets/styles/custom/css/menu.css">
    <script src="../../js/login.js"></script>
</head>
<body>
<!-- NAVBAR -->
<header>
    <nav>
        <div class="nav-wrapper navbarWrapper">
            <div class="row">
                <div class="col s12 navbarContent" style="text-align:right">
                    <span id="loggedInText" class="grey-text hide-on-med-and-up left">Hi, Jan-Lukas</span>
                    <span class="nameTag">Jonas Kruse</span>
                    <!-- Dropdown Trigger -->

                    <!-- Dropdown Structure -->
                    <ul id='contacts' class='dropdown-content'>
                        <li class=dropdownEntry""><a href="#">Jan-Lukas Müller</a></li>
                        <li class="dropdownEntry"><a href="#">Jonas Kruse</a></li>
                        <li class="dropdownEntry"><a href="#">Maik Lindemann</a></li>
                        <li class="dropdownEntry"><a href="#">Pascal Boschma</a></li>
                    </ul>
                    <a id="searchModalTrigger" href="#searchContactsModal" class="navButtonX modal-trigger black hide-on-med-and-down">Kontakte +</a>
                    <a id="favoritesModalTrigger" href="#favoritesModal" class="navButtonX modal-trigger black hide-on-med-and-down">Favoriten</a>
                    <a id="profileModalTrigger" href="#profileModal" class="navButtonX modal-trigger black hide-on-med-and-down">Profil</a>
                    <a id="themesModalTrigger" href="#themesModal" class="navButtonX modal-trigger black hide-on-med-and-down">Themes</a>
                    <a class='dropdown-trigger navButtonX black hide-on-large-only' href='#' data-target='contacts'>Letzte Chats</a>
                    <a id="logoutButton" href="#searchContactsModal" class="navButtonX modal-trigger black hide-on-med-and-down">Logout</a>
                    <div class="modal center" id="searchContactsModal" style="padding: 30px">
                        <div class="col l12 container">
                            <b><p class="black-text">nach Kontakten suchen..</p></b>
                            <div class="input-field col s12 center">
                                <input placeholder="Suchen..." id="first_name" type="text" class="validate">
                            </div>
                            <div class="black-text">
                                <table>
                                    <tr>
                                        <th class="center">Profil</th>
                                        <th class="center">Code</th>
                                        <th class="center">Benutzername</th>
                                    </tr>
                                    <tr>
                                        <td class="center">
                                            <a href="" class="tooltipped" data-position="bottom" data-tooltip="Profil anzeigen">
                                                <img style="margin-top:20px " src="images/profile_picture.jpg" width="60px" height="60px">
                                            </a>
                                        </td>
                                        <td class="center">#12353</td>
                                        <td class="center">nxtSquosh</td>
                                        <td class="center"><a class="navButtonX black" href="">hinzufügen</a></td>
                                    </tr>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal center" id="themesModal" style="padding: 30px">
                        <div class="col l12 container">
                            <b><p class="black-text">Themes auswählen..</p></b>
                            <div class="black-text">
                                <table>
                                    <tr>
                                        <th class="center">Farbe</th>
                                        <th class="center">Themes</th>
                                        <th class="center"></th>
                                    </tr>
                                    <tr>
                                        <td class="center">
                                            <a href="" class="tooltipped" data-position="bottom" data-tooltip="dunkel">
                                                <div style="width: 40px; height: 40px; background-color: #263238"></div>
                                            </a>
                                        </td>
                                        <td class="center"><b>dark-mode</b></td>
                                        <td class="center"><a class="navButtonX black" href="">auswählen..</a></td>
                                    </tr>
                                    <tr>
                                        <td class="center">
                                            <a href="" class="tooltipped" data-position="bottom" data-tooltip="hell">
                                                <div style="width: 40px; height: 40px; background-color: #eceff1"></div>
                                            </a>
                                        </td>
                                        <td class="center"><b>light-mode</b></td>
                                        <td class="center"><a class="navButtonX black" href="">auswählen..</a></td>
                                    </tr>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal center" id="favoritesModal" style="padding: 30px">
                        <div class="col l12 container">
                            <b><p class="black-text">Favoriten</p></b>
                            <div class="black-text">
                                <table>
                                    <tr>
                                        <th class="center"></th>
                                        <th class="center">Name</th>
                                        <th class="center">Benutzer Code</th>
                                    </tr>
                                    <tr>
                                        <td class="center">
                                            <a href="" class="tooltipped" data-position="bottom" data-tooltip="Profil anzeigen">
                                                <img style="margin-top:20px " src="images/profile_picture.jpg" width="60px" height="60px">
                                            </a>
                                        </td>
                                        <td class="center">
                                            <a href="" class="tooltipped" data-position="bottom" data-tooltip="Zum Chat">
                                                <p class="black-text">
                                                    <b>Testvorname Testnachname</b>
                                                </p>
                                            </a>
                                        </td>
                                        <td class="center"><b>#12321</b></td>
                                    </tr>
                                    <tr>
                                        <td class="center">
                                            <a href="" class="tooltipped" data-position="bottom" data-tooltip="Profil anzeigen">
                                                <img style="margin-top:20px " src="images/profile_picture.jpg" width="60px" height="60px">
                                            </a>
                                        </td>
                                        <td class="center">
                                            <a href="" class="tooltipped" data-position="bottom" data-tooltip="Zum Chat">
                                                <p class="black-text">
                                                    <b>Testvorname Testnachname</b>
                                                </p>
                                            </a>
                                        </td>
                                        <td class="center"><b>#12321</b></td>
                                    </tr>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal center" id="profileModal" style="padding: 30px">
                        <div class="col l12 container">
                            <div class="center">
                                <b><p class="black-text">Eigene Daten</p></b>
                                <img style="margin-top:20px " src="images/profile_picture.jpg" width="100px" height="100px">
                            </div>
                            <div class="input-field col s12">
                                <input id="userName" type="text" class="validate">
                                <label for="userName">Benutzername</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="firstName" type="text" class="validate">
                                <label for="firstName">Vorname</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="lastName" type="text" class="validate">
                                <label for="lastName">Nachname</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="mail" type="text" class="validate">
                                <label for="mail">E-Mail</label>
                            </div>
                            <div class="input-field col s12">
                                <a class="navButtonX green" href="">Speichern</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>



<!-- LEFT SIDEBAR	 -->
<ul id="sidenav" class="sidenav hide-on-small-only">
    <li>
        <div class="row">
            <div class="col s12 center">
                <div class="card">
                    <div class="card-image">
                        <img src="images/profile_picture.jpg">
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="brandTag">
        <b><span>I N T E R</span><span class="blue-text"> A C T</span></b>
    </li>
    <li class="sidenavHeading">
        <span class="grey-text">Eingeloggt als Jan-Lukas Müller</span>
    </li>
    <li class="sidenavHeading hide-on-med-and-down">
        <span>F A V O R I T E N</span>
    </li>
    <li class="hide-on-med-and-down">
        <a href="#!">[#14235] Jan-Lukas Müller
            <span class="new badge green" data-badge-caption="+">4</span>
        </a>
    </li>
    <li class="hide-on-med-and-down">
        <a href="#!">[#14235] Jonas Kruse</a>
    </li>
    <li class="hide-on-med-and-down">
        <a href="#!">[#14235] Maik Lindemann</a>
    </li>
    <li class="hide-on-med-and-down">
        <a href="#!">[#14235] Pascal Boschma</a>
    </li>
    <li class="sidenavHeading hide-on-med-and-down">
        <span>C H A T S</span>
    </li>
    <li class="hide-on-med-and-down">
        <a href="#!">[#14235] Bot Roboter 1</a>
    </li>
    <li class="hide-on-med-and-down">
        <a href="#!">[#14235] Bot Roboter 2</a>
    </li>
    <li class="hide-on-med-and-down">
        <a href="#!">[#14235] Bot Roboter 3</a>
    </li>
    <li class="hide-on-med-and-down">
        <a href="#!">[#14235] Bot Roboter 4</a>
    </li>
    <li class="hide-on-med-and-down">
        <a href="#!">[#14235] Bot Roboter 5</a>
    </li>
    <li class="hide-on-large-only">
        <a href="#!">Kontakte hinzufügen</a>
    </li>
    <li class="hide-on-large-only">
        <a href="#!">Favoriten</a>
    </li>
    <li class="hide-on-large-only">
        <a href="#!">Profil</a>
    </li>
    <li class="hide-on-large-only">
        <a href="#!">Themes</a>
    </li>
    <li class="hide-on-large-only">
        <a href="#!">Logout</a>
    </li>
    <li>
        <div style="margin-bottom:100px"></div>
    </li>
</ul>
</body>
<script>
    $(document).ready(function(){
        $('.dropdown-trigger').dropdown();
        $('.sidenav').sidenav();
        $('.modal').modal();
        $('.tooltipped').tooltip();
    });
</script>
</html>