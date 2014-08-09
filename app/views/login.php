<?= Form::open() ?>
        <?= Form::label('email', 'Email address: ', array('class' => 'field')) ?>
        <?= Form::text('email', Input::old('email')) ?>
        <br>
        <?= Form::label('password', 'Password: ', array('class' => 'field')) ?>
        <?= Form::password('password') ?>
        <br>
        <?= Form::submit('Login') ?>
        <?= Form::close() ?>