<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if(session('msg'))
<div class="alert">{{session('msg')}}</div>
@endif
<h1>Student Info</h1>


<ul>


@foreach($mystudent as $item)
<li>


        Name:  {{$item->name}}</li>


Email:{{$item->email}}
<br>
Phone {{$item->phone}}
<br><br><br>


@endforeach

</ul>

</body>
</html>
