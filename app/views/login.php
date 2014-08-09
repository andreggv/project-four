<head>

<link rel="stylesheet" href="/styles/glopallogin.css" type="text/css">
    
</head>

<body>
<div class="back">
    <div class="menu">
        <?= Form::open() ?>
        <?= Form::label('email', 'Email address: ', array('class' => 'field')) ?>
        <?= Form::text('email', Input::old('email')) ?>
        <br>
        <?= Form::label('password', 'Password: ', array('class' => 'field')) ?>
        <?= Form::password('password') ?>
        <br>
        <?= Form::submit('Login') ?>
        <?= Form::close() ?>
    </div>
</div>
</body>    
