<!DOCTYPE html>
<html lang="en-US">

<?php include_once ROOT . '/includes/head.php'; ?>

<body>
    <?php include_once ROOT . '/includes/header.php'; ?>
    
    <main>
        <h1 class="home-h1">Welcome to <br> <strong class="valo-font">VAlorant DAta</strong></h1>

        <button id="arrowDownBtn"><img src="<?= BASE_URL ?>/images/arrow-down-solid.svg" alt="Arrow down"></button>

        <div id="categories">
            <h2>Categories</h2>
            <ul>
                <a href="<?= BASE_URL ?>/index.php?page=agents"><li><h3>Agents</h3><img src="<?= BASE_URL ?>/images/users-solid.svg" alt="Agents"></li></a>
                <a href="<?= BASE_URL ?>/index.php?page=gamemodes"><li><h3>Gamemodes</h3><img src="<?= BASE_URL ?>/images/gamepad-solid.svg" alt="Gamemodes"></li></a>
                <a href="<?= BASE_URL ?>/index.php?page=maps"><li><h3>Maps</h3><img src="<?= BASE_URL ?>/images/map-location-dot-solid.svg" alt="Maps"></li></a>
                <a href="<?= BASE_URL ?>/index.php?page=weapons"><li><h3>Weapons</h3><img src="<?= BASE_URL ?>/images/gun-solid.svg" alt="Weapons"></li></a>
            </ul>
        </div>
    </main>

    <?php include_once ROOT . '/includes/footer.php'; ?>

<script src="<?= BASE_URL ?>/js/main.js"></script>
</body>
</html>
