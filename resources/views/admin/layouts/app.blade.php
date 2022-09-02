<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title') - EspecializaTi</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<style>

   * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'Inter' sans-serif
   }

   body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #4c74da4d;
   }

   .container {
      width: 80%;
      height: 80vh;
      display: flex;
      box-shadow: 5px 5px 10px rgba(0,0,0, .212)
   }

   .form {
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background-color: #eeff;
   }

   .form-header {
      margin-bottom: 3rem;
      display: flex;
      justify-content: space-between;
   }


</style>

<body>
   <div class="container">
      @yield('content')
   </div>
   
   @stack('scripts')

</body>
</html>