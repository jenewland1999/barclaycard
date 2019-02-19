<?php //if $_GET['id'] is set, load the form for editing, otherwise load the form for adding
	if (isset($_GET['id'])){ ?>
		<h2>Edit Category</h2>
	<?php
	}
	else { ?>
		<h2>Add Category</h2>
	<?php
	}
	?>
<form action="" method="POST">
	<input type="hidden" name="cats[id]" value="<?=$cats->id ?? ''?>" />
    <label>Name</label>

    <input type="text" name="cats[name]" value="<?=$cats->name ?? ''?>" />
	<input type="submit" name="submit" value="Save Category" />
</form>
