<?= $this->extend('layout') ?>
<?= $this->section('obsah') ?>
<title>Čtverec</title>
<h1 class="text-center">Čtverec</h1>
Délka strany:
<input type="number" class="form-control" id="delkaStrany" name="email" min="0" step="any">
<button type="submit" class="btn btn-primary" onclick="vypocitat()">Vypočítat</button>
<br>Plocha čtverce: <div id="plocha"></div>
<br>Obvod čtverce: <div id="obvod"></div>
<br>Úhlopříčka čtverce: <div id="uhlopricka"></div>
<?= $this->endSection() ?>