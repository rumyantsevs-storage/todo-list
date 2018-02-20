<h1>Комментарий</h1>
<ul>
<?php foreach ($comments as $comment) { ?>
    <li><b><?= $comment->name ?>:</b> <?= $comment->text ?></li>
<?php } ?>
</ul>
