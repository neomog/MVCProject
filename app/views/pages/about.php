<?php

require APPROOT . 'app/views/inc/header.php'; ?>

    <h2><?= $data['title']; ?></h2>
    <p><?= $data['description']; ?></p>
    <p>version: <strong><?= APPVERSION; ?></strong></p>

<?php require APPROOT . 'app/views/inc/footer.php'; ?>