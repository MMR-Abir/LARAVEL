<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>  <?php echo $title ?> </h1>
       <p> {{$content}}  </p>

<h3>All Fruits</h3>
<ul>
    @foreach($fruits as $fruit)
<li>
          {{$fruit}}
     @endforeach
</li>
</ul>
</body>
</html>
