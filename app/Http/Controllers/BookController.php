<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function getIndex() {
        return 'Here is the list of all books.';
    }

    public function getShow($id = null) {
        return view('book.show')->with('id', $id);
    }

    public function getCreate() {
        $view = '<form method="POST" action="/book/create">';
        $view .= csrf_field();
        $view .= '<lable>Book name:</lable>';
        $view .= '<input type="text" name="title">';
        $view .= '<input type=submit>';
        $view .= '</form>';

        return $view;
    }

    public function postCreate() {
        return 'The book title created is: '.$_POST['title'].'.';
    }
}
