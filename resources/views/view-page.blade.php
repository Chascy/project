<!DOCTYPE html>
<html lang="en">
<head>
    @extends('template')
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIEW</title>
</head>
<body class="background">

    @include('components.mainHeader')

    <div class="main-wrapper-home justify-start items-start">
      <div class="wrapper-header"><h4 class="ml-4 my-2 lg:my-4 relative font-semibold text-base md:text-[20px]">VIEW / NOTE : </h4></div>

      @include('components.note-view')

  </div>



</body>
</html>