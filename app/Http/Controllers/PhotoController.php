<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function index() {
    	return view('photo');
    }

    //
    public function create() {
    	return 'xin chao cac ban, day la action: create';
    }

    //
    public function store() {
    	return 'xin chao cac ban, day la action: store';
    }

    //
    public function show() {
    	return 'xin chao cac ban, day la action: show';
    }

    //
    public function edit() {
    	return 'xin chao cac ban, day la action: edit';
    }

    //
    public function update(RequestRegistration $data, $id) {
    	// var_dump($data);die();
    	dd($data->input('username'));

    	if(Users::where('email', 'jfdj@gmail.com')

    	return "xin chao cac ban, day la action: destroy $id";
    }

    //
    public function destroy($category1_id, $photo_id) {
    	return "xin chao cac ban, day la action: destroy $category1_id $photo_id";
    }

}
