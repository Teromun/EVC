<?php 
require_once('./data/databaseconnect.php');

$readingNew = $mysqlClient-> prepare ('SELECT * FROM partitions ORDER BY sheet_id DESC');
$readingNew-> execute();
$new = $readingNew-> fetchAll();
$lastnew = array_slice ($new, 0, 4);

$next_concert = $mysqlClient-> prepare('SELECT * FROM partitions WHERE next_concert="1"');
$next_concert-> execute();
$next = $next_concert-> fetchAll();
?>

<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Ensemble Vocal du Castelas</title>
        <link href="./styles/style.css" rel="stylesheet" media="screen">
    </head>

    <body>
        
<h2>Nouveautés :</h2>

<section class="prochainConcert">
<div class="titres">
    <ul>
        <?php foreach ($lastnew as $news) : ?>
            <li class="nolist"><a target="_blank" href="./classeur/<?php echo $news['categorie']; ?>.php#<?php echo $news['name_doc']; ?>">
            <?php echo $news['name_part']; ?> </a></li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="auteurs">
    <ul>
        <?php foreach ($lastnew as $news) : ?>
            <li class="nolist"><?php echo $news['author']; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

</section>

        
<h2><a target="_blank" href="./programmes/programme21dec2024.pdf">21 décembre 2024</a></h2>

<section class="prochainConcert">
    <div class="titres">
        <ul>
            <?php foreach ($next as $nexts) : ?>
                <li class="nolist"><a target="_blank" href="./classeur/<?php echo $nexts['categorie']; ?>.php#<?php echo $nexts['name_doc']; ?>">
                <?php echo $nexts['name_part']; ?> </a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="auteurs">
        <ul>
            <?php foreach ($next as $nexts) : ?>
                <li class="nolist"><?php if (empty($nexts['author'])) {echo "inconnu";} else {echo $nexts['author'];}; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
</body>