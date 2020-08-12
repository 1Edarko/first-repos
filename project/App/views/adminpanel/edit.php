<?php include( VIEW_ROOT .'\templates\header.php' );?>
<!-- <?php $h1 = "ADD Page";?> -->

<h2>Edit Page</h2>
<form action='<?= BASE_URL?>/admin/edit.php' method='POST'>
<label>
Title
<input type='text' name='title' value='<?php echo $fpage['title']; ?>'>

</label>
<label>
label
<input type='text' name='label' value='<?php echo $fpage['label']; ?>'>

</label>
<label>
slug
<input type='text' name='slug' value='<?php echo $fpage['slug']; ?>'>

</label><label>
Body
<textarea name='body' cols='30' rows='10' > 
<?php echo $fpage['body']; ?>
</textarea>

</label>
<button  name='edit'class='add'><i class="fas fa-edit"></i>Edit</button>
<input type="hidden" name="id" value="<?php echo $fpage['id'];?>"/>

</form>

<?php include( VIEW_ROOT .'\templates\footer.php' );?>
