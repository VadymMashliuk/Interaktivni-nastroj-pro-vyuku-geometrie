<?= $this->extend('layout') ?>
<?= $this->section('obsah') ?>
<title>Čtverec</title>
<h1 class="text-center">Čtverec</h1>
Délka strany:
<input type="number" class="form-control" id="delkaStrany" name="email" min="0" step="any">
<button type="submit" class="btn btn-primary" onclick="vypocitatCtverec()">Vypočítat</button>
<br><img src="<?= base_url('Čtverec.png') ?>" alt="">
<br>Plocha čtverce: <div id="plochaCtverce"></div>(S = a<sup>2</sup>)
<br><br>Obvod čtverce: <div id="obvodCtverce"></div>(P = 4a)
<br><br>Úhlopříčka čtverce: <div id="uhloprickaCtverce"></div>(d = a√2)
<h2 class="text-center">Vstupní parametry</h2>
<table class="table table-hover">
    <tr>
        <th>Parametr</th><th>Označení</th><th>Popis</th>
    </tr>
    <tr>
        <td>Délka strany</td><td>a</td><td>Hlavní parametr čtverce</td>
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
        <td>Výška</td><td>h</td><td>Rovná délce strany</td>
    </tr>
</table>
<?= $this->endSection() ?>