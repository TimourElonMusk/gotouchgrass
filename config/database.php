<?php
try {
    return new PDO("mysql:host=localhost;dbname=valorant_data;charset=utf8mb4","bussy", "motdepassetrescomplexe");
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>