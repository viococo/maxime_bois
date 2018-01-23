<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>" />

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,600" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/libs/reset.css') ?>">
    <?php if(isset($libscss) && !empty($libscss)){
        foreach ($libscss as $file) { ?>
            <link rel="stylesheet" href="<?= base_url('assets/css/libs/'. $file .'.css') ?>">
        <?php }
    }
    foreach ($css as $file) { ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/'. $file .'.css') ?>">
    <?php } ?>
</head>
<body>