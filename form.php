<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="trennigraafik,jooksmine,jalutamine">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trennivorm</title>
    <link rel="stylesheet" type="text/css" href="kujundus.css" />



</head>

<body>
    <h2>Treeningute sisestamine</h2>
    <div class="container">
        <form name="vorm" method="post" action="lisa.php" onsubmit="return kontroll()">
            <!-- JS r78 return kontroll -->
            <div class="row">
                <div class="col-20">
                    <label>Kuupäev (kuu/päev/aasta)</label>
                </div>
                <div class="col-80">
                    <input type="date" name="kuupaevf" min="2020-10-01" max="2021-10-01">
                </div>
            </div>
            <div class="row">
                <div class="col-20">
                    <label>Mis trenni tegid?</label>

                </div>
                <div class="col-80">
                    <input type="radio" name="alaf" value="jooksmine" checked>jooksmine<br>
                    <input type="radio" name="alaf" value="jalgratas" checked>jalgratas<br>
                    <input type="radio" name="alaf" value="koristamine" checked>koristmine<br>
                    <input type="radio" name="alaf" value="jalutamine" checked>jalutamine<br><br>

                </div>
            </div>
            <div class="row">
                <div class="col-20">
                    <label>Aeg minutites.</label>
                </div>
                <div class="col-80">
                    <input type="number" name="minf" min="30" placeholder="30 min min">
                </div>
            </div>
            <div class="row">
                <div class="col-20">
                    <label>Distants kilomeetrites.</label>
                </div>
                <div class="col-80">
                    <input type="number" name="distf" min="4" placeholder="min 4 km">
                </div>
            </div>
            <div class="row">
                <div class="col-20">
                    <label>Sisesta kalorid.</label>
                </div>
                <div class="col-80">
                    <input type="number" name="kalf" min="120" placeholder="min 120 min">
                </div>
            </div>
            <div class="row">
                <div class="col-20">
                    <label>Märkused ja kommentaarid</label>
                </div>
                <div class="col-80">
                    <textarea id="mark" placeholder="tekst"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="reset" value="Tühjenda väljad"></input>
                <input type="submit" value="Sisestatud ja tehtud"></input>
            </div>
        </form>
    </div>
    <script>
        function kontroll() {
            var kuupaevv = new Date(document.forms["vorm"]["kuupaevf"].value);
            var alav = document.forms["vorm"]["alaf"].value;
            var minv = document.forms["vorm"]["minf"].value;
            var distv = document.forms["vorm"]["distf"].value;
            var kalv = document.forms["vorm"]["kalf"].value;
            var CurrentDate = new Date(); //tänane kuupäev
            var DeafaultDate = new Date("2020-10-01"); //vormil olev vaikimisi kuupäev

            // Kui andmed on lahtrisse kirjutamatta, selleks teen kontrolli

            if (minv == "") {
                alert("Aeg jäi sisestamata !");
            }
            return false;

            if (distf == "") {
                alert("Distants  jäi sisestamata !");
            }
                return false;
            
            if (kuupaevv > CurrentDate) {
                alert("Tuleviku kuup");
                return false;
            }
        }
    </script>
</body>

</html>