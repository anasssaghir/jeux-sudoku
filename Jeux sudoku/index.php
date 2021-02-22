<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Recursive&family=Red+Rose&family=Sriracha&family=Ubuntu&family=Poppins&family=Raleway&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Jeux Sudoku</title>
</head>

<body class="flex-row">

    <div id="main__container">
        <div id="header__controls" class="flex-row">
            <span id="header__menu"><img src="images/3dots.svg" id="dotMenuSpan" ></span>
            <Span id="header__header">SUDOKU</Span>
            <span id="header__submit"><span>Soumettre</span ></span>
        </div>
        <div id="dotMenu">
            <div id="back" class="flex-row" style="justify-content: space-evenly;"><img src="images/home.svg" alt=""> Accueil</div>
            <div id="newGame">Nouveau jeu</div>
            <div id="clear">Tout effacer</div>
            <div id="solver"> <span id="text"></span>
                <div id="solverMenu">
                    <div id="solverStart">Début</div>
                    <div id="solverWatch"> 
                        <input type="checkbox" id="solverWatchCbox" name="solverWatchCbox" value="Début" checked>
                        <label for="solverWatchCbox">Regarder</label>
                    </div>
                    <div id="solverSpeed">
                        <label for="speedRange">Vitesse</label>
                        <input type="range" name="speedRange" id="speedRange" max="250" min="50" value="100">
                    </div>
                    <div id="solverStop">Arrêter</div>
                </div>

            </div>
        </div>
        
        <!-- board -->
        <div id="board">

        </div>
        <div id="keypad" class="flex-row">
        </div>

    </div>

    <!-- home page with menu options -->
    <div id="home">
        <div id="header">
            <div id="title">SUDOKU</div>

            <div id="selection__size" class="selection flex-row">
                <span class="title">Taille</span>
                <div class="options flex-row">
                    <span data-size="4"><svg width="24" height="24" viewBox="0 0 1792 1792"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <path
                                d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z" />
                            </svg></span>
                    <span data-size="9"><svg width="24" height="24" viewBox="0 0 1792 1792"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <path
                                d="M512 1248v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm-640-1024v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm-640-1024v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68z" />
                            </svg></span>
                </div>
            </div>

            <div id="selection__level" class="selection flex-row">
                <span class="title" style="font-size: 19px;">Niveau</span>
                <div class="options">
                    <Span data-level=0>Facil</Span>
                    <Span data-level=1>Moyen</Span>
                    <Span data-level=2>Difficile</Span>
                </div>
            </div>
            <div id="start">Commencer</div>
        </div>
    </div>


    <script src="global.js"></script>
    <script src="combinations.js"></script>
    <script src="validate.js"></script>
    <script src="board.js"></script>
    <script src="view.js"></script>
    <script src="digger.js"></script>
    <script src="userActions.js"></script>
    <script src="solver.js"></script>
    <script src="script.js"></script>
</body>

</html>