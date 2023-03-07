<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- custom css link  -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.jpg">

    <!-- font-awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jquery link  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Innova Infosys</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('Home')}}">Innova Infosys</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto header-ul-list">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{route('Home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('Home')}}#solution">Solution</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('Home')}}#industry">Industry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('AboutUs')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('Home')}}#contact">Contact</a>
                    </li>
                </ul>
            </form>
            </div>
        </div>
      </nav>
