<!DOCTYPE html>
<html>
<head>
    <title>Adminator - Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.teal-indigo.min.css" />
</head>

<body style="background-color:#FAFAFA">

    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col"></div>
        <div class="mdl-cell mdl-cell--4-col">
            <div class="mdl-card mdl-shadow--4dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Select user</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    @foreach($users as $user)
                        <button style="text-transform: lowercase" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">{{$user->user}}</button>
                    @endforeach
                    <br>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" id="password">
                        <label class="mdl-textfield__label" for="password">Password...</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--4-col"></div>
    </div>
    
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</body>
</html>