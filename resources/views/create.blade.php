<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>User Form</h2>

    <form method="GET" action="{{url('users-store')}}">
      
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
        @error('name')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
        @error('email')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ old('age') }}"><br>
        @error('age')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <label for="date">Date of Birth:</label>
        <input type="date" id="date" name="date" value="{{ old('date') }}"><br>
        @error('date')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <button type="submit">Submit</button>
    </form>
        
        
    </form>
    
</body>
</html>



