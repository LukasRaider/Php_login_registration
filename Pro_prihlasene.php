<?php
include_once "Menu.php";
session_start();
?>
<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta charset="utf-8" />
   
    <title>Prihlaseny</title>
</head>

<body>
    <article>
        <header>
            <h1>Prihlaseny</h1>
        </header>
        <section>
        <?php    
        if($_SESSION){
            echo '<p>Vítejte v administraci, jste přihlášeni jako '.htmlspecialchars($_SESSION['loginname']). '</p>';
            }
            else
            {
                echo '<p>Nejste prihlasen.</p>';
            }
              

            ?>
        </section>
    </article>
    
    <?php
Menu();
?>

</body>
</html>
