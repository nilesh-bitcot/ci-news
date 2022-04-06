<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo script_tag('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'); ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
    </style>
</head>
<body>
    <div class="p-5 bg-primary text-white text-center">
    <h1>My First Bootstrap 5 Page</h1>
    <h2><?= esc($title) ?></h2>
    <p>Resize this responsive page to see the effect!</p> 
    </div>
