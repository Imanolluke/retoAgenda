<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('/js/validationRegister.js') }}" defer></script>
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<script></script>
<body>
<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

<div>
   

<form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="form-group">
        <label>Surname</label>
        <input type="text" class="form-control" name="surName" required>
    </div>
    
    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <div class="form-group">
        <label>Photo</label>
        <input type="file" class="form-control" name="photo" required>
    </div>
    <button type="submit">Submit</button>
</form>




</div>
</body>
</html>





