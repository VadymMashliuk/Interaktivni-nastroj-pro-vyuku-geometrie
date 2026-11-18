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

<?= $this->endSection() ?>