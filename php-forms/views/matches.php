<h1>Possible Matches</h1>
<ul>
<<<<<<< HEAD
	<?php foreach($matches as $match): ?>
	<li>
		<?= htmlentities($match['zip']) ?>
	</li>
<?php endforeach; ?>
=======
    <?php foreach($matches as $match): ?>
    <li>
        <?= htmlentities($match['primary_city']) ?>,
        <?= htmlentities($match['state']) ?>
        <?= htmlentities($match['zip']) ?>
        <?= htmlentities($match['country']) ?>
    </li>
    <?php endforeach; ?>
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
</ul>