<html>


<head>
<title><?php 
// // isset($title) ? $title : "CMS BLOGs"
// if (isset($title)) {
    // echo $title;
// } else {
    echo "CMS BLOGs";
// }
?> </title>
<meta charset="UTF-8">

<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@600&family=Varela+Round&display=swap" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="<?= BASE_URL;?>/css/app.css">
</head>

<body>
<div class='container'>
<h1><?php if (isset($h1)) {
    echo $h1;
} else {
    echo "CMS BLOGs";
}
?></h1>