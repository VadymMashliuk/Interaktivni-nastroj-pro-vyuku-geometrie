<?= $this->extend('layout') ?>
<?= $this->section('obsah') ?>
<title>Lichoběžník</title>
<h1 class="text-center">Rovnoramenný lichoběžník</h1>
<div class="row">
    <div class="col-md-4">
        Délka větší základny:
        <input type="number" class="form-control" id="delkaVetsiZakladny" name="email" min="0" step="any">
    </div>
    <div class="col-md-4">
        Délka menší základny:
        <input type="number" class="form-control" id="delkaMensiZakladny" name="email" min="0" step="any">
    </div>
    <div class="col-md-4">
        Délka ramena:
        <input type="number" class="form-control" id="delkaRamena" name="email" min="0" step="any">
    </div>
</div>
<button type="submit" class="btn btn-primary" onclick="vypocitatLichobeznik()">Vypočítat</button>
<br><img src="<?= base_url('Lichoběžník.png') ?>" alt="">
<br>Plocha lichoběžníku: <div id="plochaLichobezniku"></div> (S = m * h)
<br><br>Obvod lichoběžníku: <div id="obvodLichobezniku"></div> (P = a + b + c + d)
<h2 class="text-center">Vstupní parametry</h2>
<table class="table table-hover">
    <tr>
        <th>Parametr</th><th>Označení</th><th>Popis</th>
    </tr>
    <tr>
        <td>Větší základna</td><td>a</td><td>Delší z rovnoběžných stran</td>
    </tr>
    <tr>
        <td>Menší základna</td><td>b</td><td>Kratší z rovnoběžných stran</td>
    </tr>
    <tr>
        <td>První rameno</td><td>c</td><td>Délka první nerovnoběžné strany</td>
    </tr>
    <tr>
        <td>Druhé rameno</td><td>d</td><td>Délka druhé nerovnoběžné strany</td>
    </tr>
    <tr>
        <td>Výška</td><td>h</td><td>Kolmá vzdálenost mezi základnami</td>
    </tr>
    <tr>
        <td>Obvod</td><td>P</td><td>Součet délek všech stran</td>
    </tr>
    <tr>
        <td>Plocha</td><td>S</td><td>Vnitřní povrch</td>
    </tr>
    <tr>
        <td>Úhlopříčka</td><td>d<sub>1</sub>, d<sub>2</sub></td><td>Vzdálenosti mezi protilehlými vrcholy</td>
    </tr>
    <tr>
        <td>Střední čára</td><td>m</td><td>Úsečka spojující středy ramen</td>
    </tr>
</table>
<?= $this->endSection() ?>