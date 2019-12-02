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

        <form action="/action_page.php">
            Course Name :<br>
            <input type="text" name="coursename" value="Course Name : (ex) Mathematics">
            <br>
            Content:
            <br>
            <input type="text" name="contentcourse" value="Write your content">
            <br><br>
            <input type="submit" value="Submit">

        </form> 

</div>
@endsection
