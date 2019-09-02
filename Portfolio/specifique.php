<?php
require_once 'tools/common.php';

$query = $db->query('SELECT * FROM image');
$donnees = $query->fetchAll();



   if(isset($_GET['site_id'])){

    $query = $db->prepare('SELECT * FROM image WHERE image.id = ?');
    $query->execute(array($_GET['site_id']));
    $result = $query->fetch();
}
?>

<!DOCTYPE html>
<html>
<head>
    <?php require 'partials/head_assets.php'; ?>
    <title>Portfolio</title>
</head>
<body>

<?php require 'partials/header.php'; ?>

<div class="container allan">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $result['file_url']; ?>" alt="Card image cap">
                <div class="card-body">
                    <a class="card-text" href="#"><?php echo $result['name']; ?></a>
                </div>
            </div>
        </div>
        <div class="col-4 offset-4 description">
            <h1><?php echo $result['name']; ?></h1>
            <p><h2><?php echo $result['description']; ?></h2></p>
            <a class="btn btn-primary" href="<?php echo $result['href']; ?>" role="button">Voir le site</a>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row">
        <div class="col-12">
            <hr class="trait">
        </div>
    </div>
</div>

<div class="espace"></div>
<div class="container">
    <div class="row">
        <?php if($donnees):?>
            <?php foreach($donnees AS $donnee): ?>
                <div class="card">
                     <a class="card-text"  href="specifique.php?site_id=<?php echo $donnee['id'];?>"><img class="card-img-top" src="<?php echo $donnee['file_url']; ?>" alt="Card image cap"></a>
                    <div class="card-body">
                       <?php echo $donnee['name']; ?>
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

