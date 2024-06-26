<?php include __DIR__ . "/includes/start.php";

$stmt = $pdo->prepare('SELECT * FROM utente WHERE id = ?');
$stmt->execute([$_GET["id"]]);

$row = $stmt->fetch(); ?>

<div class="col-3">
    <div class="card mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title"><?= $row["name"] ?></h5>
            <p class="card-text"><?= $row["age"] ?> anni</p>
        </div>
        <p class="card-text"><?= $row["text"] ?></p>
        <div class="d-flex justify-content-between align-items-center">
            <a href="/u3-w1-php/u4-w1-d3/details.php?id=<?= $row["id"] ?>" class="link-underline link-underline-opacity-0">Dettagli</a> 
            <div class="d-flex gap-4">
                <a href="/u3-w1-php/u4-w1-d3/delete.php?id=<?= $row["id"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F00" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                </svg></a> 
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0F0" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                </svg></a>
            </div>
        </div>
    </div>
    </div>
</div>


<?php include __DIR__ . "/includes/end.php" ?>