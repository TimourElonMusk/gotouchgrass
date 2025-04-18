<!DOCTYPE html>
<html lang="en-US">

<?php include_once ROOT . '/includes/head.php'; ?>

<body>
    <?php include_once ROOT . '/includes/header.php'; ?>
    
    <main class="gamemodes">
        <h1>GAMEMODES</h1>

        <div class="grid">
            <?php foreach ($gamemodes as $gamemode):
                if (isset($gamemode["listViewIconTall"]) && isset($gamemode["description"])): ?>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <h2><?=$gamemode["displayName"] ?></h2>
                                <img src="<?=$gamemode["listViewIconTall"]?>" alt="Gamemode image">
                            </div>
                            <div class="card-back">
                                <div class="card-info">
                                    <?php echo isset($gamemode["displayIcon"]) ? "<img src={$gamemode["displayIcon"]} alt=\"Icon\" class=\"gamemode__icon\">": null; ?>
                                    <h3><?=$gamemode["displayName"]?></h3>
                                    <p class="card-back__subtitle underline"><?=$gamemode["duration"] ?></p>
                                    <p class="description"><?=$gamemode["description"]?></p>
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
