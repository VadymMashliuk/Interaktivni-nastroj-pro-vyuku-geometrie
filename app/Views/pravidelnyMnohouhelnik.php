<?= $this->extend('layout') ?>
<?= $this->section('obsah') ?>
<title>Pravidelný mnohoúhelník</title>
<h1 class="text-center">Pravidelný mnohoúhelník</h1>
Délka strany:
<input type="number" class="form-control" id="delkaStrany" name="email" min="0" step="any">
<button type="submit" class="btn btn-primary" onclick="vypocitatPravidelnyMnohouhelnik()">Vypočítat</button>
<br><img src="<?= base_url('Pravidelný mnohoúhelník.png') ?>" alt="">
<br>Plocha pravidelného mnohoúhelníku: <div id="plochaPravidelnehoMnohouhelniku"></div> (S = (5a<sup>2</sup>) / (4 * tan(36˚)))
<br><br>Obvod pravidelného mnohoúhelníku: <div id="obvodPravidelnehoMnohouhelniku"></div> (P = 5 * a)
<br><br>První úhlopříčka pravidelného mnohoúhelníku: <div id="prvniUhloprickaPravidelnehoMnohouhelniku"></div> (d<sub>1</sub> = 2 * R * sin(36˚))
<br><br>Druhá úhlopříčka pravidelného mnohoúhelníku: <div id="druhaUhloprickaPravidelnehoMnohouhelniku"></div> (d<sub>2</sub> = 2 * R * sin(72˚))
<h2 class="text-center">Vstupní parametry</h2>
<table class="table table-hover">
    <tr>
        <th>Parametr</th><th>Označení</th><th>Popis</th>
    </tr>
    <tr>
        <td>Počet stran</td><td>n</td><td>Počet stran mnohoúhelníku</td>
    </tr>
    <tr>
        <td>Délka strany</td><td>a</td><td>Délka jedné strany</td>
    </tr>
    <tr>
        <td>Obvod</td><td>P</td><td>Součet délek všech stran</td>
    </tr>
    <tr>
        <td>Poloměr vepsané kružnice</td><td>r</td><td>Vzdálenost od středu ke straně</td>
    </tr>
    <tr>
        <td>Poloměr opsané kružnice</td><td>R</td><td>Vzdálenost od středu k vrcholu</td>
    </tr>
    <tr>
        <td>Vnitřní úhel</td><td>α</td><td>Velikost jednoho vnitřního úhlu</td>
    </tr>
    <tr>
        <td>Vnější úhel</td><td>ß</td><td>Velikost jednoho vnějšího úhlu</td>
    </tr>
    <tr>
        <td>Úhlopříčka</td><td>d<sub>k</sub></td><td>Vzdálenost mezi vrcholy, které nesousedí</td>
    </tr>
    <tr>
        <td>Plocha</td><td>S</td><td>Vnitřní povrch</td>
    </tr>
</table>
<?= $this->endSection() ?>