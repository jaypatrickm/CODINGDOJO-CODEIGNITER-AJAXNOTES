<?php foreach ($notes as $note) { ?>
<li class="note">
	<div class="title"><h3><?= $note['title'] ?></h3></div><form action="delete/<?= $note['id'] ?>" method="post"><button type="submit" class="btn btn-danger">delete</button></form>
	<form action="update/<?= $note['id'] ?>" method="post">
		<input type="hidden" name="id" value="<?= $note['id'] ?>">
		<textarea name="description" rows="10" cols="29"><?= $note['description'] ?></textarea>
		<input class="btn btn-default" type="submit" value="update" />
	</form>
</li>
<?php } ?>