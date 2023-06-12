<?= $this->extend('layouts/matrix') ?>

<?= $this->section('content') ?>

<?php if (session()->getFlashdata('message')) : ?>
    <div id="message" class="alert alert-success col-sm-3 text-dark" role="alert">
        <?= session()->getFlashdata('message'); ?>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('message').style.display = 'none';
        }, 2000)
    </script>
<?php endif ?>

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="table-dark">
                <th class="text-white">No</th>
                <th class="text-white">Title</th>
                <th class="text-white">Author</th>
                <th class="text-white">Publisher</th>
                <th class="text-white">Pages</th>
                <th class="text-white">Cover</th>
                <th class="text-white">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($books as $book) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $book['title']; ?></td>
                    <td><?= $book['author']; ?></td>
                    <td><?= $book['publisher']; ?></td>
                    <td><?= $book['pages']; ?></td>
                    <td><?= $book['cover']; ?></td>
                    <td>
                        <a href="/book/edit/<?= $book['id']; ?>" class="btn btn-info">Edit</a>
                        <form action="<?= base_url('/books/delete/' . $book['id']); ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure delete this book?');">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>