@extends('layouts.app')

@section('content')

<style>
    input[type=text], select, textarea 
{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 2px;
    resize: vertical;
}
</style>

<div class="container">
    <h2>Add Detail Courses</h2>
    @foreach($data as $n)
<form method="post" action="{{ route('detailcourses.update') }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            Course Name :<br>
<input type="text" name="coursename" value="{{ $n->coursename }}">
            <br>
            Content:
            <br>
<input type="text" name="contentcourse" value="{{ $n->contentcourse }}">
            <br><br>
            <input type="submit" value="Submit">
        </form> 
    @endforeach
</div>
@endsection
