<?php
require 'init.php';
if(empty($_GET['page'])){
echo "no page here";
}else{
    $slug= $_GET['page'];
    $page= $db->prepare("
    SELECT * FROM pages
    WHERE
    slug='$slug'
    "
);
$page->execute(array(
    'slug' => $slug
));
$pages=$page->fetch(PDO::FETCH_ASSOC);
// var_dump($pages);

}
if($page){
    $pages['created']= new DateTime( $pages['created']);
}
if($pages['updated']){
    $pages['updated']=new DateTime( $pages['updated']);
}

require VIEW_ROOT . '/blog.php';

?>