<?php 

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends MOdel {
    protected $table = 'buku';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'author', 'publisher', 'pages', 'cover'];
}

?>