<?= $this->extend('layout') ?>
<?= $this->section('obsah') ?>
<title>Kruh</title>
<h1 class="text-center">Kruh</h1>
Poloměr:
<input type="number" class="form-control" id="polomer" name="email" min="0" step="any">
<button type="submit" class="btn btn-primary" onclick="vypocitatKruh()">Vypočítat</button>
<br><img src="<?= base_url('Kruh.png') ?>" alt="">
<br>Plocha kruhu: <div id="plochaKruhu"></div>(S = πr<sup>2</sup>)
<br><br>Délka kruhu: <div id="delkaKruhu"></div>(C = 2πr = πd)
<br><br>Průměr: <div id="prumerKruhu"></div>(d = 2r)
<h2 class="text-center">Vstupní parametry</h2>
<table class="table table-hover">
    <tr>
        <th>Parametr</th><th>Označení</th><th>Popis</th>
    </tr>
    <tr>
        <td>Poloměr</td><td>r</td><td>Vzdálenost od středu ke kružnici</td>
    </tr>
    <tr>
        <td>Průměr</td><td>d</td><td>Vzdálenost středem mezi dvěma body na kružnici</td>
    </tr>
    <tr>
        <td>Délka kruhu</td><td>C</td><td>Délka hrany kružnice</td>
    </tr>
    <tr>
        <td>Plocha kruhu</td><td>S</td><td>Plocha vnitřního prostoru</td>
    </tr>
    <tr>
        <td>Centrální úhel</td><td>α</td><td>Úhel mezi dvěma poloměry</td>
    </tr>
    <tr>
        <td>Délka oblouku</td><td>l</td><td>Délka části kruhu</td>
    </tr>
    <tr>
        <td>Obsah sektoru</td><td>S<sub>sektoru</sub></td><td>Plocha části kruhu ohraničené dvěma poloměry a obloukem</td>
    </tr>
</table>
<?= $this->endSection() ?>