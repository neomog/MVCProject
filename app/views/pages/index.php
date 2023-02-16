<?php
//echo APPROOT;
require APPROOT . 'app/views/inc/header.php'; ?>
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-3"><?= $data['title']; ?></h1>
        <p class="lead"><?= $data['description']; ?></p>
    </div>
</div>
<pre>

</pre>
<?php require APPROOT . 'app/views/inc/footer.php'; ?>