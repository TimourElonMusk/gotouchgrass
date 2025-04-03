<!DOCTYPE html>
<html lang="en">

<?php include_once ROOT . '/includes/head.php'; ?>

<body>
    <?php include_once ROOT . '/includes/header.php'; ?>
    
    <main>
        <h1>AGENTS</h1>

        <div class="grid">
            <?php
            foreach ($agents as $agent) {
                if ($agent["isPlayableCharacter"])
                echo "<img class=\"fullPortraitV2\" src=\"{$agent['fullPortraitV2']}\" \"alt=\"{$agent['displayName']}'s portrait\">";
            }
            ?>    
        </div>
    </main>

    <?php include_once ROOT . '/includes/footer.php'; ?>

    <!--agent's portrait : fullPortraitV2-->
    <!--
    <ul>
        <//?php foreach ($data['data'] as $item): ?>
            <li><//?= //$item['displayName'] ?></li>
        <//?php endforeach; ?>
    </ul>
    -->

<script src="<?= BASE_URL ?>/js/main.js"></script>
</body>
</html>
