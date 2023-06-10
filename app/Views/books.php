<?= $this->extend('layouts/matrix') ?>

<?= $this->section('content') ?>

    <?php if (session()->getFlashdata('message')) : ?>
        <div id="message" class="alert alert-success col-sm-2 text-dark" role="alert">
            <?= session()->getFlashdata('message'); ?>
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('message').style.display = 'none';
            }, 2000)
        </script>
    <?php endif ?>

    <h5>Hello World</h5>

<?= $this->endSection() ?>