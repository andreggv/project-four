<h2>Edit your info</h2>


<?= Form::open() ?>
<?= Form::label('email', 'Email address: ', array('class' => 'field')) ?>
<?= Form::text('email', $user->email) ?>
<br>
<?= Form::label('password', 'Password: ', array('class' => 'field')) ?>
<?= Form::password('password') ?>
<br>
<?= Form::label('password-confirm', 'Confirm your password: ', array('class' => 'field')) ?>
<?= Form::password('password-confirm') ?>
<br>
<?= Form::label('name', 'Name: ', array('class' => 'field')) ?>
<?= Form::text('name', $user->name) ?>
<br>

<?= Form::submit('Update it!') ?>
<?= Form::close() ?>