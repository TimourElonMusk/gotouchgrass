<!DOCTYPE html>
<html lang="en-US">

<?php include_once ROOT . '/includes/head.php'; ?>

<body>
    <?php include_once ROOT . '/includes/header.php'; ?>
    
    <main class="maps">
        <h1>MAPS</h1>

        <div class="grid">
            <?php foreach ($maps as $map):
                if (isset($map["listViewIconTall"]) && isset($map["tacticalDescription"])): ?>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <h2><?=$map["displayName"] ?></h2>
                                <img src="<?=$map["listViewIconTall"]?>" alt="Map image">
                            </div>
                            <div class="card-back">
                                <div class="card-info">
                                    <img src=<?=$map["displayIcon"]?> alt="Icon" class="map__icon">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;
            endforeach; ?>
        </div>
    </main>

    <?php include_once ROOT . '/includes/footer.php'; ?>

<script src="<?= BASE_URL ?>/js/main.js"></script>
</body>
</html>
