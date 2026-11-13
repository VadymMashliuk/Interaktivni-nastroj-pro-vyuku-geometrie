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
<?= $this->endSection() ?>