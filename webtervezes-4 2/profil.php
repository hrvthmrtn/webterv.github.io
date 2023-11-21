<?php
include 'init.php';
$felhasznalo = $_SESSION["user"];

if (!isset($_SESSION["user"])) {
    header("Location: bejelentkezes.php");
    }

    define("DEFAULT_PROFILKEP", "img/profile.png");
    $profilkep = DEFAULT_PROFILKEP;

    $utvonal = "img/" . $_SESSION["user"]->getFelhasznalonev();
    $engedelyezettKiterjesztesek = ["png", "jpg", "jpeg"];

    foreach ($engedelyezettKiterjesztesek as $kit) {
     if (file_exists("$utvonal.$kit")) {
        $profilkep = "$utvonal.$kit";
        }
    }
    $hibak = [];

    if (isset($_POST["upload-btn"]) && is_uploaded_file($_FILES["profile-picture"]["tmp_name"])) {
        profilkepFeltoltese($hibak, $_SESSION["user"]->getFelhasznalonev());

        if (count($hibak) === 0) {

            $kit = strtolower(pathinfo($_FILES["profile-picture"]["name"], PATHINFO_EXTENSION));
            $utvonal = "img/" . $_SESSION["user"]->getFelhasznalonev() . "." . $kit;

            if ($utvonal !== $profilkep && $profilkep !== DEFAULT_PROFILKEP) {
                unlink($profilkep);     
            }

            header("Location: profil.php");
        }
    }
?>

<!DOCTYPE html>
<html lang ="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/stilus.css">
<link rel="stylesheet" href="css/mobile.css">
<title>Bejelentkezés - Webtervezés Kft.</title>
<link rel="shortcut icon" href="img/shortcut.jpeg">
</head>
<body>
<header>
    <?php
    navigacioGeneralasa("profil");
    ?>
</header>
<main>
    <div id="scroll-to-top">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">▲</button>
    </div>
    <h2 class="login">PROFIL</h2>
    <table class="form-container">
            <tr>
                <td colspan="2">
                    <img src="<?php echo $profilkep; ?>" alt="Profilkép" height="200">

                    <form action="profil.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="profile-picture">
                        <input type="submit" name="upload-btn" value="Profilkép módosítása">
                    </form>
                </td>
            </tr>
            <tr>
                <th>Felhasználónév</th>
                <td><?php echo $felhasznalo->getFelhasznalonev(); ?></td>
            </tr>
            <tr>
                <th>E-mail cím</th>
                <td><?php echo $felhasznalo->getEmail(); ?></td>
            </tr>

        </table>
</main>

    

<div class="footer">
    <footer>Copyright © Webtervezés Kft. 2022</footer>
    </div>



    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script>
        $(window).show(function() {
            var bejelentkezes = $('.form-container');
            bejelentkezes.addClass("visible");
        });
    </script>

</body>
</html>