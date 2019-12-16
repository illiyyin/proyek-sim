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
        return redirect()->route('detailcourses.index')->with('success', 'Mata pelajaran baru telah ditambahkan');
    }

    public function edit($id){
        $data = Detailcoursesmodel::where('id', $id)->get();
        return view('editcourse', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Detailcoursesmodel::where('id', $id)->first();
        $data->coursename = $request->coursename;
        $data->contentcourse = $request->contentcourse;
        $data->save();
        return redirect()->route('detailcourses.index')->with('alert-success', 'Catatan berhasil diupdate!');
    }

    public function destroy($id){
        $data = Detailcoursesmodel::where('id',$id)->first();
        $data->delete();
        return redirect()->route('detailcourses.index')->with('alert-success', 'Catatan berhasil dihapus!');
    }
}