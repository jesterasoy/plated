<?php
$GET_URL = isset($_GET['category']) ? $_GET['category'] : 'All';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="./images/site-logo.png" type="image/png" />
    <meta name="description" content="A simple recipe app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .poppins-thin {
            font-family: "Poppins", sans-serif;
            font-style: normal;
        }

        .title {
            font-family: "Montserrat", sans-serif;
        }
    </style>
    <title>Plated | <?= htmlspecialchars($GET_URL) ?></title>
</head>

<body>
    <?php
    include '../common/header.php';
    ?>

</body>

</html>