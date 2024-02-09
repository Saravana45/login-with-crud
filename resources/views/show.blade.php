
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action=""  method="GET">
    <Table border="3px" class="table">
        <thead>
            <tr>
                <td>name</td>
                <td>email</td>
                <td>age</td>
                <td>date</td>
                <td>action</td>
            </tr>
            
                <tbody>
                    
                    @foreach ( $cruds as $crud)
                        
                    <tr>
                    <td>{{$crud->name}}</td>
                    <td>{{$crud->email}}</td>
                    <td>{{$crud->age}}</td>
                    <td>{{$crud->date}}</td>
                    <td><a href="{{url('edit')}}\{{$crud->id}}">edit</a>
                    <a href="{{url('delete')}}\{{$crud->id}}">delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            
        </thead>
    </Table>
    <a href="{{url('register')}}">register</a></td>
    </form>
</body>
</html>