    <?php include('header.php'); ?>
    <?php include('oeuvres.php'); ?>
        <main>
            <div id="liste-oeuvres">
                <?php foreach($oeuvres as $oeuvre): ?>
                <?php if (array_key_exists('is_enabled', $oeuvre) && $oeuvre['is_enabled'] == true): ?>
                    <article class="oeuvre">
                        <a href="oeuvre.php?id=<?php echo $oeuvre['id'];?>">
                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>"/>
                        <h2><?php echo $oeuvre['titre']; ?></h2>
                        <p class="description"><?php echo $oeuvre['artiste']; ?></p>
                        </a>
                    </article>
                <?php endif; ?>
                <?php endforeach ?>
            </div> 
        </main> 
    <?php include('footer.php'); ?> 

