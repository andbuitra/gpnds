<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>

        <div>
            Thanks for creating an account with the verification demo app.
            Please follow <a href="{{ URL::to('registro/verify/' . $confirmation_code) }}">this link</a> to verify your email address.<br/>

        </div>

    </body>
</html>
