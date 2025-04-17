<!DOCTYPE html>
<html lang="en-US">

<?php include_once ROOT . '/includes/head.php'; ?>

<body>
    <?php include_once ROOT . '/includes/header.php'; ?>
    
    <main class="weapons">
        <h1>WEAPONS</h1>

        <div class="grid">
            <?php foreach ($weapons as $weapon): ?>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img class="weapon-img" src=<?=$weapon["displayIcon"]?> alt="Weapon image">
                        </div>
                        <div class="card-back">
                            <div class="card-info">
                                <h2><?=$weapon["displayName"]?></h2>
                                <?php echo isset($weapon['shopData']['categoryText']) ? "<p class=\"card-back__subtitle\"><span class=\"underline\">Category:</span> {$weapon["shopData"]["categoryText"]}</p>": null; ?>
                                
                                <div class="credits">
                                    <img src="<?= BASE_URL ?>/images/credits-icon.webp" alt="Credits icon">
                                    <p><?=$weapon['shopData']['cost']?></p>
                                </div>

                                <ul class="weapon-stats">  
                                    <li><span class="underline">Fire rate:</span> <?=$weapon["weaponStats"]["fireRate"]?></li>
                                    <li><span class="underline">Run speed multiplier:</span> <?=$weapon["weaponStats"]["runSpeedMultiplier"]?></li>
                                    <li><span class="underline">Equip time seconds:</span> <?=$weapon["weaponStats"]["equipTimeSeconds"]?></li>
                                    <li><span class="underline">Reload time seconds:</span> <?=$weapon["weaponStats"]["reloadTimeSeconds"]?></li>
                                    <li><span class="underline">First bullet accuracy:</span> <?=$weapon["weaponStats"]["firstBulletAccuracy"]?></li>
                                    <li><span class="underline">Shotgun pellet count:</span> <?=$weapon["weaponStats"]["shotgunPelletCount"]?></li>
                                    <?php switch ($weapon["weaponStats"]["wallPenetration"]) {
                                        case 'EWallPenetrationDisplayType::High':
                                            echo "<li><span class=\"underline\">Wall penetration:</span> High</li>";
                                            break;
                                        
                                        case 'EWallPenetrationDisplayType::Medium':
                                            echo "<li><span class=\"underline\">Wall penetration:</span> Medium</li>";
                                            break;

                                        case 'EWallPenetrationDisplayType::Low':
                                            echo "<li><span class=\"underline\">Wall penetration:</span> Low</li>";
                                            break;
                                    }?>
                                    <?php if (count($weapon["weaponStats"]["damageRanges"]) == 2):?>
                                        <li><span class="underline">Head damage range:</span> <?=$weapon["weaponStats"]["damageRanges"][1]["headDamage"]?>-<?=$weapon["weaponStats"]["damageRanges"][0]["headDamage"]?></li>
                                        <li><span class="underline">Body damage range:</span> <?=$weapon["weaponStats"]["damageRanges"][1]["bodyDamage"]?>-<?=$weapon["weaponStats"]["damageRanges"][0]["bodyDamage"]?></li>
                                        <li><span class="underline">Leg damage range:</span> <?=$weapon["weaponStats"]["damageRanges"][1]["legDamage"]?>-<?=$weapon["weaponStats"]["damageRanges"][0]["legDamage"]?></li>
                                    <?php else:?>
                                        <li><span class="underline">Head damage:</span> <?=$weapon["weaponStats"]["damageRanges"][0]["headDamage"]?></li>
                                        <li><span class="underline">Body damage:</span> <?=$weapon["weaponStats"]["damageRanges"][0]["bodyDamage"]?></li>
                                        <li><span class="underline">Leg damage:</span> <?=$weapon["weaponStats"]["damageRanges"][0]["legDamage"]?></li>
                                    <?php endif;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php include_once ROOT . '/includes/footer.php'; ?>

<script src="<?= BASE_URL ?>/js/main.js"></script>
</body>
</html>