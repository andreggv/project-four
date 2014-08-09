<h1>Register your daily adventures!</h1>

<?php //Instagram photo integration ?>
<?php //Publish entry ?>
<?php //Generate statistics on mood throughout the trip ?>

<div>

<?= Form::open() ?>

    <?= Form::label('title', 'What is the title of your entry? ', array('class' => 'field')) ?>
    <?= Form::text('title', Input::old('title')) ?>
    <br>

    <?= Form::label('city', 'Which city is your entry about? ', array('class' => 'field')) ?>
    <?= Form::text('city', Input::old('city')) ?>
    <br>

    <?= Form::label('mood', 'How are you feeling today? ', array('class' => 'field')) ?>
    <?= Form::select('mood', array('Excited'=>'Excited','Aprehensive'=>'Aprehensive','Plain             happy'=>'Plain happy','Angry'=>'Angry','Sad'=>'Sad','Reflexive'=>'Reflexive')); ?>
    <br>

    <?= Form::label('weather', 'What is the weather? ', array('class' => 'field')) ?>
    <?= Form::text('weather', Input::old('weather')) ?>
    <br>

    <?= Form::label('notes', 'Write about about you did today: ', array('class' => 'field')) ?>
    <?= Form::text('notes', Input::old('notes')) ?>
    <br>

    <?= Form::submit('Post it!') ?>

<?= Form::close() ?>
    
</div>    