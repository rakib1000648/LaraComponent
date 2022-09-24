<?php

namespace App\Http\Controllers;

use App\Models\CKEditor;
use Illuminate\Http\Request;

class CKEditorController extends Controller
{
    public function index()
    {
        $data = CKEditor::get();
        return view('layouts.ckeditor',compact('data'));
    }
    public function createCKEditor(Request $inputs)
    {

        CKEditor::create($inputs->all());

        return redirect()->to(url('ckeditor'));
    }
}
