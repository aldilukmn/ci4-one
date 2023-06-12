<?php 

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends MOdel {
    protected $table = 'buku';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'author', 'publisher', 'pages', 'cover'];

    public function getBook($id = false)
    {
        if ($id) {
            return $this->where(['id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }
}

?>