<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Import</title>
</head>
<body>
<h2>Import Excel Data In Laravel</h2>
@if($errors->any())
    <h5 style="color:red">Following errors exists in your excel file</h5>
    <ol>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ol>
@endif
<form action="/idd" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="student2_file" accept=".xlsx,.xls,.csv" required>
    <br> <br>
    <input type="submit" value="Upload">
</form>

</body>
</html>
