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
            'books' => $this->booksModel->findAll(),
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

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Book',
            'book' => $this->booksModel->getBook($id),
        ];

        return view('edit', $data);
    }

    public function updated($id)
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'publisher' => $this->request->getVar('publisher'),
            'pages' => $this->request->getVar('pages'),
            'cover' => $this->request->getVar('cover'),
        ];

        $this->booksModel->update($id, $data);

        session()->setFlashdata('message', 'Book updated successfully');

        return redirect()->to(base_url('/books'));
    }

    public function delete($id)
    {
        $this->booksModel->delete($id);

        session()->setFlashdata('message', 'Book deleted successfully');

        return redirect()->to(base_url('/books'));
    }
}
