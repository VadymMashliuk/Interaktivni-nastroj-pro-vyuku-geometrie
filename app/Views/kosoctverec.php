<?= $this->extend('layout') ?>
<?= $this->section('obsah') ?>
<title>Kosočtverec</title>
<h1 class="text-center">Kosočtverec</h1>
<div class="row">
    <div class="col-md-6">
        Délka strany:
        <input type="number" class="form-control" id="delkaStrany" name="email" min="0" step="any">
    </div>
    <div class="col-md-6">
        Úhel mezi stranami:
        <input type="number" class="form-control" id="uhelMeziStranami" name="email" min="0" step="any">
    </div>
</div>
<button type="submit" class="btn btn-primary" onclick="vypocitatKosoctverec()">Vypočítat</button>
<br><img src="<?= base_url('Kosočtverec.png') ?>" alt="">
<br>Plocha kosočtverce: <div id="plochaKosoctverce"></div> (S = a * h)
<br><br>Obvod kosočtverce: <div id="obvodKosoctverce"></div> (P = 4a)
<br><br>První úhlopříčka kosočtverce: <div id="prvniUhloprickaKosoctverce"></div> (d<sub>1</sub> = 2 * a * sin(α / 2))
<br><br>Druhá úhlopříčka kosočtverce: <div id="druhaUhloprickaKosoctverce"></div> (d<sub>2</sub> = 2 * a * cos(α / 2))
<h2 class="text-center">Vstupní parametry</h2>
<table class="table table-hover">
    <tr>
        <th>Parametr</th><th>Označení</th><th>Popis</th>
    </tr>
    <tr>
        <td>Strana</td><td>a</td><td>Délka libovolné strany kosočtverce</td>
    </tr>
    <tr>
        <td>První úhlopříčka</td><td>d<sub>1</sub></td><td>Úhlopříčka mezi prvním párem protilehlých vrcholů</td>
    </tr>
    <tr>
        <td>Druhá úhlopříčka</td><td>d<sub>2</sub></td><td>Úhlopříčka mezi druhým párem protilehlých vrcholů</td>
    </tr>
    <tr>
        <td>Výška</td><td>h</td><td>Kolmá vzdálenost mezi protilehlými stranami</td>
    </tr>
    <tr>
        <td>První úhel</td><td>α</td><td>Vnitřní úhel kosočtverce</td>
    </tr>
    <tr>
        <td>Druhý úhel</td><td>ß</td><td>Sousední vnitřní úhel</td>
    </tr>
    <tr>
        <td>Obvod</td><td>P</td><td>Součet délek všech stran</td>
    </tr>
    <tr>
        <td>Plocha</td><td>S</td><td>Vnitřní povrch</td>
    </tr>
    <tr>
        <td>Poloměr vepsané kružnice</td><td>r</td><td>Poloměr kružnice vepsané do kosočtverce</td>
    </tr>
</table>
<?= $this->endSection() ?>