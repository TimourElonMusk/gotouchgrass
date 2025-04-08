<?php function getAbilityBySlot(array $abilities, string $slot): ?array {
    foreach ($abilities as $ability) {
        if ($ability['slot'] === $slot) {
            return $ability;
        }
    }
    return null;
}
?>


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
                                <img class="fullPortraitV2" src=<?=$agent["fullPortraitV2"]?> alt="Portrait">
                            </div>
                            <div class="card-back">
                                <div class="agent-info">
                                    <h2><?=$agent["displayName"]?></h2>
                                    <img class="role-img" src=<?=$agent["role"]["displayIcon"]?> alt="Role Icon" title="<?=$agent["role"]["description"]?>">
                                    <p class="description"><?=$agent["description"]?></p>
                                    <div class="abilities">
                                        <?php $ability = getAbilityBySlot($agent["abilities"], "Ability1"); ?>
                                        <div class="ability-container">
                                            <img src="<?=$ability["displayIcon"]?>" alt="Ability 1", title="<?=$ability["displayName"]?> : <?=$ability["description"]?>">
                                        </div>
                                        <?php $ability = getAbilityBySlot($agent["abilities"], "Ability2"); ?>
                                        <div class="ability-container">
                                            <img src="<?=$ability["displayIcon"]?>" alt="Ability 2", title="<?=$ability["displayName"]?> : <?=$ability["description"]?>">
                                        </div>
                                        <?php $ability = getAbilityBySlot($agent["abilities"], "Grenade"); ?>
                                        <div class="ability-container">
                                            <img src="<?=$ability["displayIcon"]?>" alt="Grenade", title="<?=$ability["displayName"]?> : <?=$ability["description"]?>">
                                        </div>
                                    </div>
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
