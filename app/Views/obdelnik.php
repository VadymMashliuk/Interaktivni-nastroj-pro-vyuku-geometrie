<?= $this->extend('layout') ?>
<?= $this->section('obsah') ?>
<title>Obdélník</title>
<h1 class="text-center">Obdélník</h1>
<div class="row">
    <div class="col-md-6">
        Délka strany:
        <input type="number" class="form-control" id="delkaStrany" name="email" min="0" step="any">
    </div>
    <div class="col-md-6">
        Šířka strany:
        <input type="number" class="form-control" id="sirkaStrany" name="email" min="0" step="any">
    </div>
</div>
<button type="submit" class="btn btn-primary" onclick="vypocitatObdelnik()">Vypočítat</button>
<br><img src="<?= base_url('Obdélník.png') ?>" alt="">
<br>Plocha obdélníku: <div id="plochaObdelniku"></div> (S = a * b)
<br><br>Obvod obdélníku: <div id="obvodObdelniku"></div> (P = 2(a + b))
<br><br>Úhlopříčka obdélníku: <div id="uhloprickaObdelniku"></div> (d = √(a<sup>2</sup> + b<sup>2</sup>))
<h2 class="text-center">Vstupní parametry</h2>
<table class="table table-hover">
    <tr>
        <th>Parametr</th><th>Označení</th><th>Popis</th>
    </tr>
    <tr>
        <td>Délka</td><td>a</td><td>Délka první strany</td>
    </tr>
    <tr>
        <td>Šířka</td><td>b</td><td>Délka druhé strany</td>
    </tr>
    <tr>
        <td>Úhlopříčka</td><td>d</td><td>Vzdálenost mezi protilehlými vrcholy</td>
    </tr>
    <tr>
        <td>Obvod</td><td>P</td><td>Součet délek všech stran</td>
    </tr>
    <tr>
        <td>Plocha</td><td>S</td><td>Vnitřní povrch</td>
    </tr>
    <tr>
        <td>Výška</td><td>h</td><td>Vzdálenost mezi rovnoběžnými stranami</td>
    </tr>
</table>
<?= $this->endSection() ?>