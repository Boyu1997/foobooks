<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    //
    public function getIndex() {
        return 'Here is the list of all books.';
    }

    public function getShow($id) {
        return 'Show individual book '.$id.'.';
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
