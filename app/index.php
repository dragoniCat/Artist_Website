<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Artist Website</title>
        <meta name="description" content="This is a website intended to showcase an artist's work">

        <!-- Bootstrap CSS -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous"
        >
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="src/view/style.css">
    </head>
    <body>
        <!-- Content -->
        <div class="window">
            <?php include "src/view/components/header.php" ?>
            <div class="row gx-0">
                <?php include "src/view/components/sidebar.html" ?>
                <?php include "src/view/components/main-area.html" ?>
            </div>
            <?php include "src/view/components/footer.html" ?>
        </div>
    </body>
</html>
