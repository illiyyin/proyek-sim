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
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <h2>Add Detail Courses</h2>

        <form method="post" action="/detailcourses">
            @csrf
            Course Name :<br>
            <input type="text" name="coursename" placeholder="Course Name : (ex) Mathematics">
            <br>
            Content:
            <br>
            <input type="text" name="contentcourse" placeholder="Write your content">
            <br><br>
            <input type="submit" value="Submit">

        </form> 

</div>
@endsection
