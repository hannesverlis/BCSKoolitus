<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="trennigraafik,jooksmine,jalutamine">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treeningud</title>
    <link rel="stylesheet" type="text/css" href="tabel.css" />
    <link rel="stylesheet" type="text/css" href="kujundus.css" />
    <style>
        body {
            background-color: azure;
        }
    </style>
</head>

<body>
    <h1>Minu trennigraafik oktooris 2020</h1>
    <h3>Eesmärgid aprilliks: minimaalselt 3 trenni nädalas</h3>
    <p title="Soovitused">Trennisoovitused selleks kuuks</p>
    <div class="tooltip">Kuidas treenida?
        <span class="tooltiptext"> Tuleb olla järjekindel?</span> </div>
    <img src="october.png" alt="Käes on oktoober!">
    <table class="parem">
        <col width="10%">
        <col width="20%">
        <col width="30%">
        <col width="10%">
        <col width="10%">
        <col width="20%">
        <caption>Alusta trennidega juba täna!</caption>
        <?php

        include("connect.php");
        if (!$db) {
            die('Ühenduse loomine ebaõnnestus!');
        }

        $sql = "SELECT * FROM trennid ORDER BY kuupaev ASC";

        if ($result = mysqli_query($db, $sql)) {
            if (mysqli_num_rows($result) > 0) {

                echo "<table><tr><th><h1>Jrk. </h1></th>";  //tulba pealkiri
                echo "<th><h1>H1 Kuupäev </h1></th>";  //tulba pealkiri
                echo "<th><h2>h2 Ala</h2></th>";
                echo "<th><h2>h2 Minutit</h2></th>";
                echo "<th><h2>h2 Distants</h2></th>";
                echo "<th><h2>h2 Kalorid</h2></th>";
                echo "</tr>";
                $rida = 1;
                while ($row = mysqli_fetch_array($result)) {   //mysql_fetch_array() - Fetch a result row as an associative array, a numeric array, or both
                    echo "<tr>";
                    $kpaev = date_create($row['kuupaev']);
                    $kpaevf = date_format($kpaev, "j.n.yy");
                    echo "<tr><td>" . $rida . ".</td>";
                    echo "<td>" . $kpaevf . "</td>";;
                    echo "<td>" . $row['ala'] . "</td>";
                    echo "<td>" . $row['min'] . "</td>";
                    echo "<td>" . $row['dist'] . "</td>";
                    echo "<td>" . $row['kal'] . "</td>";
                    $rida++;
                } //tabeli ridade väljastuse lõpp
                
                echo "</table>";
                mysqli_free_result($result);
            }
        } else {
            echo "Kirjeid ei leitud!";
        }

        mysqli_close($db);
        ?><br>
        <a href="form.php"><button>Lisa treening graafikusse!</button></a>

</body>

</html>