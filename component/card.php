<?php include __DIR__ . "/../database/dabase.php";?>
<?php 
    foreach ($discs as $disc) {
    ?>
        
        <article class="card">
            <img src='<?php echo $disc["cover"]; ?>' alt="">
            <h2><?php echo $disc["title"]; ?></h2> 
            <h3><?php echo $disc["author"]; ?></h3>
            <h4><?php echo $disc["year"]; ?></h4>
            <h4><?php echo $disc["genre"]; ?></h4>
        </article>
        <?php 
    }
    ?>
        
