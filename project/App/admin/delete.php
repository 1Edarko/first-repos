
<?php


require '../init.php';
if(isset($_GET['id'])){

$delete=$db->prepare("
DELETE FROM pages
WHERE id=:id


"

);
$delete->execute(
    array(
        'id'=>$_GET['id']
    )
    );
    header( 'location:'.BASE_URL.'/admin/list.php' );


}




?>