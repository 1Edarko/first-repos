



<?php include(VIEW_ROOT .'\templates\header.php');?>
<?php if(empty($pages)): ?>
<p>Sorry Page Not Available :(</p>
<?php else : ?>
<?php foreach($pages as $page): ?>
<ul>
<li>
<a href= "<?php echo BASE_URL;?>/page.php?page=<?php echo $page['slug'];?>"><?php echo $page['slug'];?></a>
</li>
<?php endforeach;?>
</ul>
<?php endif;?>
<?php include(VIEW_ROOT .'\templates\footer.php');

?>