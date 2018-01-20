<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>" />

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:500,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/libs/reset.css">
    <?php foreach ($libscss as $file) {
        echo '<link rel="stylesheet" href="assets/css/libs/'. $file .'.css">';
    }
    foreach ($css as $file) {
        echo '<link rel="stylesheet" href="assets/css/'. $file .'.css">';
    } ?>
</head>
<body>