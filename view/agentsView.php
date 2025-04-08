<!DOCTYPE html>
<html lang="en">

<?php include_once ROOT . '/includes/head.php'; ?>

<body>
    <?php include_once ROOT . '/includes/header.php'; ?>
    
    <main>
        <h1>AGENTS</h1>

        <div class="grid">
            <?php foreach ($agents as $agent):
                if ($agent["isPlayableCharacter"]): ?>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img class="fullPortraitV2" src="<?=$agent["fullPortraitV2"]?>" alt="Portrait">
                            </div>
                            <div class="card-back">
                                <div class="agent-info">
                                    <h2><?=$agent["displayName"]?></h2>
                                    <img class="role-img" src="<?=$agent["role"]["displayIcon"]?>" alt="Role Icon">
                                    <p class="description"><?=$agent["description"]?></p>
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
