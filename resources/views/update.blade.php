<!DOCTYPE html>
<head>
</head>
<h2>User Form</h2>
<body>
    <form method="GET" action="{{url('users-update',$crud->id)}}">


<label for="name">Name:</label>
<input type="text" id="name" name="name" value="{{ $crud->name }}"><br>
@error('name')
    <span style="color: red;">{{ $message }}</span><br>
@enderror

<label for="email">Email:</label>
<input type="email" id="email" name="email" value="{{ $crud->email }}"><br>
@error('email')
    <span style="color: red;">{{ $message }}</span><br>
@enderror

<label for="age">Age:</label>
<input type="number" id="age" name="age" value="{{ $crud->age }}"><br>
@error('age')
    <span style="color: red;">{{ $message }}</span><br>
@enderror

<label for="date">Date of Birth:</label>
<input type="date" id="date" name="date" value="{{ $crud->date }}"><br>
@error('date')
    <span style="color: red;">{{ $message }}</span><br>
@enderror

<button type="submit">Submit</button>
</form>


</form>

</body>
</html>
