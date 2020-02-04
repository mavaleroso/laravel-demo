<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/semantic.min.css') }}">
    <title>Login</title>

    <style type="text/css">
        body {
        background-color: #DADADA;
        }
        body > .grid {
        height: 100%;
        }
        .image {
        margin-top: -100px;
        }
        .column {
        max-width: 450px;
        }
    </style>

</head>
<body>
    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui teal image header">
            <div class="content">
                Log-in to your account
            </div>
            </h2>
            <form class="ui large form" method="post" action="login_request">
            {{ csrf_field() }}
            <div class="ui stacked segment">
                <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
                </div>
                <div class="field">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                </div>
                <div class="ui fluid large teal submit button">Login</div>
            </div>

            <div class="ui error message"></div>

            </form>

            <div class="ui message">
            New to us? <a href="#">Sign Up</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ mix('js/semantic.min.js') }}"></script>
    <script>
    $(document)
        .ready(function() {
        $('.ui.form')
            .form({
            fields: {
                email: {
                identifier  : 'username',
                rules: [
                    {
                    type   : 'empty',
                    prompt : 'Please enter your username'
                    }
                ]
                },
                password: {
                identifier  : 'password',
                rules: [
                    {
                    type   : 'empty',
                    prompt : 'Please enter your password'
                    },
                    {
                    type   : 'length[5]',
                    prompt : 'Your password must be at least 5 characters'
                    }
                ]
                }
            }
            })
        ;
        })
    ;
    </script>
</body>
</html>