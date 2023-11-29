        <?php include('header.php'); ?>
        <?php include('oeuvres.php');
        
        foreach($oeuvres as $oeuvre):
            if ($_GET['id'] == $oeuvre['id']): ?>
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="<?php echo $oeuvre ['image']; ?>" alt="<?php echo $oeuvre ['titre']; ?>">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $oeuvre ['titre']; ?></h1>
                        <p class="description"><?php echo $oeuvre ['artiste']; ?></p>
                        <p class="description-complete"><?php echo $oeuvre ['description']; ?> </p>
                    </div>
                </article>                               
            <?php endif;?>
        <?php endforeach ?>
        <?php include('footer.php'); ?> 


