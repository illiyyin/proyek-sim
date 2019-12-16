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

.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	background: #DCC0EC;
	margin: 10px auto;
	padding: 20px;
	background: #DCC0EC;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
}

.body {
  background-image: url(landingstyle/images/wall.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

</style>

<body class="body">
<div class="container">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <h2 style="padding-left:300px">Add Detail Courses</h2>

        <div class="form-style-5">
            <form method="post" action="/detailcourses">
                @csrf
                Course Name :<br>
                <input type="text" name="coursename" placeholder="Course Name : (ex) Mathematics">
                <br>
                Content:
                <br>
                <input type="text" name="contentcourse" placeholder="Write your content">
                <br><br>
                <button type="submit" style="margin:auto">Submit</button>

            </form> 
        </div>
</div>
</body>
@endsection
