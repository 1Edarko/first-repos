<?php include( VIEW_ROOT .'\templates\header.php' );?>
<!-- <?php $h1 = "ADD Page";?> -->

<h2>Add Page</h2>
<form action='<?= BASE_URL?>/admin/add.php' method='POST'>
<label>
Title
<input type='text' name='title'>

</label>
<label>
label
<input type='text' name='label'>

</label>
<label>
slug
<input type='text' name='slug'>

</label><label>
Body
<textarea name='body' cols='30' rows='10'> 
</textarea>

</label>
<button  name='add'class='add'><i class="fas fa-plus"></i>Add New Page</button>
</form>

<?php include( VIEW_ROOT .'\templates\footer.php' );?>
