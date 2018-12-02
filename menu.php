<!DOCTYPE HTML>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="code.css" />
    </head>

    <header>
        <nav>
            <div id="item_Menu"><a href="index.php" title="Accueil"><img id="logo_BankUP" src="logo.png" alt="Accueil" /></a></div>
            <div id="item_Menu"><a href="index.php" title="Accueil">Accueil</a></div>
            <div id="item_Menu"><a href="index.php" title="Accueil"></a></div>
            <?php if ($_SESSION['connexion']=='') { ?>
                <div id="item_Menu"><a href="#" title="Se connecter">Se connecter</a></div>
                <div id="item_Menu"><a href="inscription.php" title="Ouvrir un compte">Ouvrir un compte</a></div>
            <?php } else {?>
                <div id="item_Menu"><a href="#" title="Espace client">Espace client</a></div>
                <div id="item_Menu"><a href="#" title="Se déconnecter">Se déconnecter</a></div>
            <?php } ?>
        </nav>
    </header>

    <body>
        <div>
            
        </div>

    </body>


    <footer>
        <div></div>
    </footer>

</html>