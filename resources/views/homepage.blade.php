<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Hello, this is a blade template</h1>
  <a href="/about">Go to about page</a>
  <h3>{{$name}}</h3>
  <ul>
    @foreach($allAnimals as $animal)
    <li>{{$animal}}</li>
    @endforeach
  </ul>
</body>
</html>