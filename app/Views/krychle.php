<?= $this->extend('layout') ?>
<?= $this->section('obsah') ?>
<title>Krychle</title>
<h1 class="text-center">Krychle</h1>
Délka hrany:
<input type="number" class="form-control" id="delkaHrany" name="email" min="0" step="any">
<button type="submit" class="btn btn-primary" onclick="vypocitatKrychle()">Vypočítat</button>
<br><img src="<?= base_url('krychle.png') ?>" alt="">
<br>Povrch krychle: <div id="povrchKrychle"></div> (S = 6a<sup>2</sup>)

<?= $this->endSection() ?>