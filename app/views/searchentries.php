<?= Form::open() ?>

<h2> Let's have a look at your travel log</h2>

    <?= Form::label('city', 'For which city do you want do search entries about? ', array('class' => 'field')) ?>
    <?= Form::text('city', Input::old('city')) ?>
    <br>

    <?= Form::submit('Get my entries there') ?>

<?= Form::close() ?>
    
</div>    