<?php
require_once "connect.php"; 

if (!($con = mysqli_connect($HOST,$USER,$PASSWORD,$DB)))
{
	die("Nelze se připojit k databázovému serveru!</body></html>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání dat z formuláře
    $loginname = $_POST["login"];
    $password = $_POST["heslo"];

    // SQL dotaz s použitím prepared statements
    $stmt = $con->prepare("SELECT * FROM registrace WHERE login = ? LIMIT 1");
    $stmt->bind_param("s", $loginname);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($password === $user["heslo"]) {
            session_start();
            $_SESSION["loginname"] = $user["login"];
			echo "Prihlasen.";
			echo '<a href="Pro_prihlasene.php">Prihlasen</a>';
            exit();
        } else {
            echo "Spatne udaje.";
        }
    } else {
        echo "Spatne prihlaseni udaje.";
    }

    // Uzavření prepared statement a spojení s databází
    $stmt->close();
    $connection->close();
	
} else {
    echo "Chyba: Neplatný požadavek.";
}

?>
