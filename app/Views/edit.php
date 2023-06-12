<?= $this->extend('layouts/matrix') ?>

<?= $this->section('content') ?>

    <div class="row">
        <div class="col">
            <form action="<?= base_url('/book/updated/' . $book['id'] ); ?>" method="post">
                <?= csrf_field() ?> <!-- Security Form - Cross Site Requesr Forgery -->
                <input type="hidden" value="<?= $book['id']; ?>" name="id">
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label fs-4">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $book['title']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="author" class="col-sm-2 col-form-label fs-4">Author</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="author" name="author" value="<?= $book['author']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="publisher" class="col-sm-2 col-form-label fs-4">Publisher</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="publisher" name="publisher" value="<?= $book['publisher']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pages" class="col-sm-2 col-form-label fs-4">Pages</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="pages" name="pages" value="<?= $book['pages']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cover" class="col-sm-2 col-form-label fs-4">Cover</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cover" name="cover" value="<?= $book['pages']; ?>">
                    </div>
                </div>
                <div class="row mb-3 m-0 p-0">
                    <div class="col-sm-12 m-0 p-0 d-flex justify-content-end gap-3">
                        <a href="/books" class="btn btn-secondary col-sm-2">Cancel</a>
                        <button type="submit" class="btn btn-primary col-sm-2">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?= $this->endSection(); ?>