<?= $this->extend('templates/template') ?>
<?= $this->section('banner') ?>
<div id="banner" class="banner-dark">
</div>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<h1>Welcome to Iskar Tours</h1>
<p>Your adventure starts here!</p>
<hr>
<?= $this->include('pages/services') ?>
<hr class="my-1 my-md-5">
<?= $this->include('pages/tours') ?>
<?= $this->endSection() ?>