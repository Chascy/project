<!DOCTYPE html>
<html lang="en">
<head>
    @extends('template')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body class="background">
{{-- MAIN HEADER --}}

 @include('components.mainHeader')

   {{-- MAIN WRAPPER --}}
    <div class="main-wrapper-home">
        <div class="wrapper-header"><h4 class="ml-4 my-2 lg:my-4 relative font-semibold text-base md:text-[20px]">ALL NOTES : </h4></div>


        {{-- NOTES ITEM WRAPPER --}}
        <div class="sub-wrapper-home" >

          {{-- NOTE TEMPLATE (gagamitan ng foreach) --}}
          @foreach($notes as $note)
            @include('components.noteCard')
          @endforeach
          
       
        </div>


    </div>


</body>
</html>