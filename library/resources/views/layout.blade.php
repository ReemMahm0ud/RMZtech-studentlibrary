<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>book list</title>
    <!--<link href="{{ asset('css/app.css')}}" rel="stylesheet"/>-->
   <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">-->
    <!-- Boostrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Boostrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!--font-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <style>
    body {
    font-family: 'Architects Daughter', cursive;
    min-height: 75rem;
    padding-top: 4.5rem;
    background-image:url({{url('images/photo-1544640808-32ca72ac7f37.jpg')}});
  }
  
  h1,h2,h3,h4,h5,h6 {
      font-family: 'Architects Daughter', cursive;
  }
  p {
      font-size: 18px;
      font-family: 'Architects Daughter', cursive;
  }

  table, th, td {
    border: black;
    font-family: 'Architects Daughter', cursive;
  }
  </style>
</head>
<body>

    <div class="container">
        <p><br/></p>
        @yield('content')
    </div>

</body>
</html>