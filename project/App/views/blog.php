<?php include(VIEW_ROOT .'\templates\header.php');?>

<?php if(!$page) : ?>
<p>Sorry Page not found :(</p>
<?php
else:
?>
<h2><?php echo esc($pages['title']); ?></h2>
<?php echo esc($pages['body']); ?>


<?php endif; ?>
<p class='created'>Created on <?php echo $pages['created']->format('jS M Y'); ?> </p>
<p class='created'>Updated on <?php echo $pages['created']->format('jS h:i:a'); ?> </p>




<?php include(VIEW_ROOT .'\templates\footer.php');

