<?php
require_once 'tools/common.php';

$query = $db->query('SELECT * FROM image');
$donnees = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <?php require 'partials/head_assets.php'; ?>
    <title>Portfolio</title>
</head>
<body>

<?php require 'partials/header.php'; ?>


<div class="container">
    <div class="row">
            <?php if($donnees):?>
                <?php foreach($donnees AS $donnee): ?>
                        <div class="card">
                            <a class="card-text" href="specifique.php?site_id=<?php echo $donnee['id']; ?>"><img class="card-img-top" src="<?php echo $donnee['file_url']; ?>" alt="Card image cap"></a>
                            <div class="card-body">
                                <div style="color:white;"><?php echo $donnee['name']; ?></div>
                            </div>
                        </div>
                <?php endforeach; ?>
              <?php else:?>
                <p>Aucun image est disponible pour ce article.</p>
            <?php endif; ?>
    </div>
</div>
<?php require 'partials/footer.php'; ?>

</body>
</html>
