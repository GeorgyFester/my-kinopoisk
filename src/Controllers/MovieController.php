<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;
use App\Kernel\Validator\Validator;

class MovieController extends Controller
{
    public function index(): void
    {
        $this->view('movies');
    }

    public function add(): void
    {
        $this->view('admin/movies/add');
    }

    public function store(): void
    {
        $file = $this->request()->file('image');

        $filePath = $file->move('movies');

        dd($this->storage()->url($filePath));

        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
            //'description' => ['required'],
            //'category' => ['required'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }
            $this->redirect('/admin/movies/add');
        }
        $id = $this->db()->insert('movies', [
            'name' => $this->request()->input('name'),
        ]);

        dd($id);
    }
}