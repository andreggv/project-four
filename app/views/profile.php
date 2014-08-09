

<h1>Welcome <?php echo $user->name ?></h1>

<p>Your e-mail: <?php echo $user->email ?></p>

<p>Your account was created on: <?php echo $user->created_at ?></p>

<nav>
    <p><a href="<?= URL::to('profile-edit') ?>">Edit your information</a></p>
    <p><a href="<?= URL::to('new-entry') ?>">Write a post to your journal</a></p>
    <p><a href="<?= URL::to('searchentries') ?>">Search for an entry in your journal</a>
</nav>    