<!DOCTYPE html>
<html lang="en">

<?php include_once ROOT . '/includes/head.php'; ?>

<body>
    <?php include_once ROOT . '/includes/header.php'; ?>
    
    <main class="gamemodes">
        <h1>GAMEMODES</h1>

        <div class="grid">
            <?php foreach ($gamemodes as $gamemode): ?>
                <?php if (isset($gamemode["listViewIconTall"])): ?>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="<?=$gamemode["listViewIconTall"]?>" alt="List view icon tall">
                            </div>
                            <div class="card-back">
                                <div class="card-info">
                                    
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
