
    <h1>Create your account to start exploring</h1>
    
        <?= Form::open() ?>
        <?= Form::label('email', 'Email address: ', array('class' => 'field')) ?>
        <?= Form::text('email', Input::old('email')) ?>
        <br>
        <?= Form::label('password', 'Password: ', array('class' => 'field')) ?>
        <?= Form::password('password') ?>
        <br>
        <?= Form::label('password-confirm', 'Confirm your password: ', array('class' => 'field')) ?>
        <?= Form::password('password-confirm') ?>
        <br>
        <?= Form::label('name', 'Name: ', array('class' => 'field')) ?>
        <?= Form::text('name', Input::old('name')) ?>
        <br>
        
        <?= Form::submit('Sign up!') ?>
        <?= Form::close() ?>