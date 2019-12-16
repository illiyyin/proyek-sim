<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detailcoursesmodel;

class DetailcoursesController extends Controller
{
    public function index()
    {
        $data = Detailcoursesmodel::all();
        return view('tesdashboard', compact('data'));
    }

    public function create(){
        return view('detailcourses');
    }

    public function store(Request $request){
        $this->validate($request, [
            'coursename' => 'required|max:255|string',
            'contentcourse' => 'required|max:255|string'
        ]);
        $detailcourses = Detailcoursesmodel::create([
            'coursename' => $request->get('coursename'),
            'contentcourse' => $request->get('contentcourse')
        ]);
        $detailcourses->save();
        return redirect('/detailcourses')->with('success', 'Mata pelajaran baru telah ditambahkan');
    }
}
