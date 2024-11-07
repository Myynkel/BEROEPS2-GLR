<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ontkoking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'><!--montserrat font-->
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Logo/Naam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.html">Home</a><!--Refresh pagina-->
                <a class="nav-link" href="#Login">Login/Aanmelden</a>
            </div>
        </div>
    </div>
</nav>

<!--Inhoud home -->
<main>
    <div class="headerimage">
        <img class="header-image" src="./media/ontbijt.jpg" alt="" style="display:block;">
        <img class="header-image" src="./media/lunch.webp" alt="" style="display:none;">
        <img class="header-image" src="./media/diner.jpg" alt="" style="display:none;">
    </div>


    <section class="new-recipes">
        <div class="container">
            <h1>Nieuwe Recepten</h1>
            <div class="recipes">
            <?php foreach ($resultatenNieuw as $recept): ?>
                <div class="recipe-card" data-recipe-title="<?= $recept['receptNaam'] ?>"
                    <!-- Afbeelding -->
                    <img src="<?= $recept['receptPlaatje'] ?>">

                    <!-- Recept Info -->
                    <div class="recipe-info">
                        <h2><?= $recept['receptNaam'] ?></h2>
                        <p><span class="time"><?= $recept['bereidingstijd']; ?></span></p>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="new-recipes">
        <div class="container">
            <h1>Ontbijt</h1>
            <div class="recipes">
                <?php foreach ($resultatenOntbijt as $recept): ?>
                <div class="recipe-card" data-recipe-title="<?= $recept['receptNaam'] ?>"
                <!-- Afbeelding -->
                <img src="<?= $recept['receptPlaatje'] ?>">

                <!-- Recept Info -->
                <div class="recipe-info">
                    <h2><?= $recept['receptNaam'] ?></h2>
                    <p><span class="time"><?= $recept['bereidingstijd']; ?></span></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </section>

    <section class="new-recipes">
        <div class="container">
            <h1>Lunch</h1>
            <div class="recipes">
                <?php foreach ($resultatenLunch as $recept): ?>
                <div class="recipe-card" data-recipe-title="<?= $recept['receptNaam'] ?>"
                <!-- Afbeelding -->
                <img src="<?= $recept['receptPlaatje'] ?>">

                <!-- Recept Info -->
                <div class="recipe-info">
                    <h2><?= $recept['receptNaam'] ?></h2>
                    <p><span class="time"><?= $recept['bereidingstijd']; ?></span></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </section>

    <section class="new-recipes">
        <div class="container">
            <h1>Dinner</h1>
            <div class="recipes">
                <?php foreach ($resultatenDinner as $recept): ?>
                <div class="recipe-card" data-recipe-title="<?= $recept['receptNaam'] ?>"
                <!-- Afbeelding -->
                <img src="<?= $recept['receptPlaatje'] ?>">

                <!-- Recept Info -->
                <div class="recipe-info">
                    <h2><?= $recept['receptNaam'] ?></h2>
                    <p><span class="time"><?= $recept['bereidingstijd']; ?></span></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </section>


</main>

<div class="modal fade" id="recipeModal" tabindex="-1" aria-labelledby="recipeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel">Recipe Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="recipeContent">Recipe content goes here...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>