<?php $h1 = "Admin Panel";?>

<?php include( VIEW_ROOT .'\templates\header.php' );?>
<?php if ( empty( $pages ) ):  ?>
<p>No page At this Moment.</p>
<?php else:  ?>
<table class='tb'>
<thead>
<tr>
<th>Label</th>
<th>Title</th>
<th>slug</th>


</tr>

</thead>
<tbody>
<?php foreach($pages as $page) :   ?>
<tr>
    <td><?= $page['label'];?> </td>
    <td><?= $page['title'];?></td>
    <td><a href= "<?= BASE_URL;?>/page.php?page=<?= $page['slug'];?>"><?= $page['slug'];?></a></td>
    <td><a href='<?= BASE_URL;?>/admin/edit.php?id=<?= $page['id'];?>'><button class='edit'><i class="fas fa-edit"></i>Edit</button></a></td>
    <td><a href='<?= BASE_URL;?>/admin/delete.php?id=<?= $page['id'];?>'><button class='dlt'><i class="fas fa-trash-alt"></i>Delete</button></a></td>
    </tr>

<?php endforeach;  ?>
</tbody>

</table>
<center>
<a href='<?php echo BASE_URL;?>/admin/add.php'><button class='add'><i class="fas fa-plus"></i>Add new page</button></a>
</center>

<?php endif;
?>

<?php include( VIEW_ROOT .'\templates\footer.php' );?>
