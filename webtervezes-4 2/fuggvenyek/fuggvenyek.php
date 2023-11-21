<?php  

function adatokMentese(string $fajlnev, array $adatok) {
    $file = fopen($fajlnev, "w");

    if (!$file) {
        die("Nem sikerült a fájl megnyitása!");
    }

    foreach ($adatok as $adat) {
        fwrite($file, serialize($adat) . "\n");
    }

    fclose($file);
}

function adatokBetoltese(string $fajlnev) : array  {

    $file = fopen($fajlnev, "r");
    $adatok = [];

    if (!$file) {
        die("Nem sikerült a fájl megnyitása!");
    }

    while (($sor = fgets($file)) !== false) {
        $adat = unserialize($sor);
        $adatok[] = $adat;
    }

    fclose($file);
    return $adatok;

}

function beVagyEJelentkezve(){
    return isset($_SESSION["user"]);
}

function kijelentkezes(){
    unset($_SESSION["user"]);
}

function navigacioGeneralasa(string $aktualisOldal) {
    echo "<h1>A Webtervezés Kft. hivatalos weboldala</h1>" .
        "<nav><ul>" .
        "<li" . ($aktualisOldal === "fooldal" ? " class='active'" : "") . ">" .
        "<a class='hover' href='index.php'>Főoldal</a>" .
        "</li>" .
        "<li" . ($aktualisOldal === "forum" ? " class='active'" : "") . ">" .
        "<a class='hover' href='forum.php'>Forum</a>" .
        "</li>" .
        "<li" . ($aktualisOldal === "munkatarsak" ? " class='active'" : "") . ">" .
        "<a class='hover' href='munkatarsak.php'>Munkatársak</a>" .
        "</li>" .
        "<li" . ($aktualisOldal === "rolunk" ? " class='active'" : "") . ">" .
        "<a class='hover' href='rolunk.php'>Rólunk</a>" .
        "</li>" .
        "<li" . ($aktualisOldal === "kapcsolat" ? " class='active'" : "") . ">" .
        "<a class='hover' href='kapcsolat.php'>Kapcsolat</a>" .
        "</li>" .
        "<li" . ($aktualisOldal === "profil" ? " class='active'" : "") . ">" .
        "<a class='hover' href='profil.php'>Profil</a>" .
        "</li>";
        if(beVagyEJelentkezve()) {
            echo "<li" . ($aktualisOldal === "kijelentkezes" ? " class='active'" : "") . ">" .
                "<a class='hover' href='kijelentkezes.php'>Kijelentkezés</a>" .
                "</li>";
        }else{
            echo "<li" . ($aktualisOldal === "bejelentkezes" ? " class='active'" : "") . ">" .
            "<a class='hover' href='bejelentkezes.php'>Bejelentkezés</a>" .
            "</li>";
        }
        echo "</ul></nav>";
}

function profilkepFeltoltese(array &$hibak, string $felhasznalonev)
{
    // Először érdemes megnézni, hogy ténylegesen feltöltött-e egy fájlt a felhasználó.

    if (isset($_FILES["profile-picture"]) && is_uploaded_file($_FILES["profile-picture"]["tmp_name"])) {
        // Hibakezelés: a fájlfeltöltés során adódó esetleges hibák.
        if ($_FILES["profile-picture"]["error"] !== 0) {
            $hibak[] = "Hiba történt a fájlfeltöltés során!";
        }

        // Csak PNG és JPG kiterjesztésű képeket szeretnénk elfogadni.
        $engedelyezettKiterjesztesek = ["png", "jpg", "jpeg"];

        // A feltöltött fájl kiterjesztésének lekérdezése.
        $kiterjesztes = strtolower(pathinfo($_FILES["profile-picture"]["name"], PATHINFO_EXTENSION));

        // Hibakezelés: nem megfelelő kiterjesztés.
        if (!in_array($kiterjesztes, $engedelyezettKiterjesztesek)) {
            $hibak[] = "A profilkép kiterjesztése hibás! Engedélyezett formátumok: " .
                implode(", ", $engedelyezettKiterjesztesek) . "!";
        }

        // Hibakezelés: túl nagy (5 MB-nál nagyobb) fájl.
        if ($_FILES["profile-picture"]["size"] > 5242880) {
            $hibak[] = "A fájl mérete túl nagy!";
        }

        // Ha nem volt hiba, akkor összeállítjuk a profilkép mentési útvonalát, és megpróbáljuk elmenteni a fájlt.
        if (count($hibak) === 0) {
            $utvonal = "img/$felhasznalonev.$kiterjesztes";
            $flag = move_uploaded_file($_FILES["profile-picture"]["tmp_name"], $utvonal);

            // Hibakezelés: sikertelen átmozgatás.
            if (!$flag) {
                $hibak[] = "A profilkép elmentése nem sikerült!";
            }
        }
    }
}


