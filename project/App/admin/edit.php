<?php
require '../init.php';
if ( !empty( $_POST ) && isset($_POST['edit']) ) {
    $id = $_POST['id'];
    $label = $_POST['label'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $body = $_POST['body'];
    $update = $db->prepare( "
    UPDATE pages SET 
    label=:label,
    title=:title,
    slug=:slug,
    body=:body,
    updated=NOW()
    WHERE id =:id
    " );
    $update->execute(
        array(
            'id'=>$id,
            'label'=>$label,
            'title'=>$title,
            'slug'=>$slug,
            'body'=>$body,

        )
        );
        print_r($_POST);
        print_r($update);
        // header('location:'.BASE_URL.'/admin/list.php');


}
if ( !isset( $_GET['id'] ) ) {
    header( 'location:'.BASE_URL.'/admin/list.php' );
    die();
}
$page = $db->prepare( "
SELECT id , title, label ,body ,slug 
FROM pages WHERE id = :id

" );
$page->execute(
    array(
        'id'=> $_GET['id']
    )
);
$fpage= $page->fetch( PDO::FETCH_ASSOC );
// var_dump( $fpage );
// var_dump( $page );

require VIEW_ROOT . '/adminpanel/edit.php';

?>