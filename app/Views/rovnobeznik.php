<?= $this->extend('layout') ?>
<?= $this->section('obsah') ?>
<title>Rovnoběžník</title>
<h1 class="text-center">Rovnoběžník</h1>
<div class="row">
    <div class="col-md-4">
        Délka první strany:
        <input type="number" class="form-control" id="delkaPrvniStrany" name="email" min="0" step="any">
    </div>
    <div class="col-md-4">
        Délka druhé strany:
        <input type="number" class="form-control" id="delkaDruheStrany" name="email" min="0" step="any">
    </div>
    <div class="col-md-4">
        Úhel mezi stranami:
        <input type="number" class="form-control" id="uhelMeziStranami" name="email" min="0" step="any">
    </div>
</div>
<button type="submit" class="btn btn-primary" onclick="vypocitatRovnobeznik()">Vypočítat</button>
<br><img src="<?= base_url('Rovnoběžník.png') ?>" alt="">
<br>Plocha rovnoběžníku: <div id="plochaRovnobezniku"></div> (S = a * b * sin α)
<br><br>Obvod rovnoběžníku: <div id="obvodRovnobezniku"></div> (P = 2(a + b))
<br><br>První úhlopříčka rovnoběžníku: <div id="prvniUhloprickaRovnobezniku"></div> (d<sub>1</sub> = √(a<sup>2</sup> + b<sup>2</sup> + 2 * a * b * cos α))
<br><br>Druhá úhlopříčka rovnoběžníku: <div id="druhaUhloprickaRovnobezniku"></div> (d<sub>1</sub> = √(a<sup>2</sup> + b<sup>2</sup> - 2 * a * b * cos α))
<h2 class="text-center">Vstupní parametry</h2>
<table class="table table-hover">
    <tr>
        <th>Parametr</th><th>Označení</th><th>Popis</th>
    </tr>
    <tr>
        <td>První strana</td><td>a</td><td>Délka první strany</td>
    </tr>
    <tr>
        <td>Druhá strana</td><td>b</td><td>Délka druhé strany</td>
    </tr>
    <tr>
        <td>Výška na stranu a</td><td>h<sub>a</sub></td><td>Kolmá vzdálenost mezi stranami <i>a</i></td>
    </tr>
    <tr>
        <td>Výška na stranu b</td><td>h<sub>b</sub></td><td>Kolmá vzdálenost mezi stranami <i>b</i></td>
    </tr>
    <tr>
        <td>Úhel mezi stranami</td><td>α</td><td>Vnitřní úhel mezi stranami <i>a</i> a <i>b</i></td>
    </tr>
    <tr>
        <td>Druhý úhel</td><td>ß</td><td>Přiléhající k úhlu α</td>
    </tr>
    <tr>
        <td>První úhlopříčka</td><td>d<sub>1</sub></td><td>Vzdálenost mezi prvním párem protilehlých vrcholů</td>
    </tr>
    <tr>
        <td>Druhá úhlopříčka</td><td>d<sub>2</sub></td><td>Vzdálenost mezi druhým párem protilehlých vrcholů</td>
    </tr>
    <tr>
        <td>Obvod</td><td>P</td><td>Součet délek všech stran</td>
    </tr>
    <tr>
        <td>Plocha</td><td>S</td><td>Vnitřní povrch</td>
    </tr>
</table>
<?= $this->endSection() ?>