<?php

namespace App\Controllers;

class Books extends BaseController
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new \App\Models\BooksModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Books',
        ];
        return view('books', $data);
    }

    public function add() 
    {
        session();
        $data = [
            'title' => 'Add book',
            'validation' => \Config\Services::Validation(),
        ];
        return view('add', $data);
    }

    public function save()
    {
        $this->booksModel->save([
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'publisher' => $this->request->getVar('publisher'),
            'pages' => $this->request->getVar('pages'),
            'cover' => $this->request->getVar('cover'),
        ]);

        session()->setFlashdata('message', 'Book saved successfully');

        return redirect()->to(base_url('/books'));
    }
}
