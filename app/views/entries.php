<head>

<link rel="stylesheet" href="/styles/glopal.css" type="text/css">
    
</head>

<header>
    <h2> Let's see how you did in <em><?php echo $entry->city ?></em></h2>
    <br>
</header>

<div id="general"></div>
    <h3> I was feeling: <?php echo $entry->mood ?> </h3>
    <br>
    <h3> The weather was: <?php echo $entry->weather ?> </h3>
    <br>
    <h3> This is what I had to say: </h3>
    <br>
</div>

<div id="remarks">
    <h4><?php echo $entry->title ?></h4>
    <br>
    <h4><?php echo $entry->notes ?></h4>
</div>