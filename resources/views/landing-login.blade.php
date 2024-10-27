<!DOCTYPE html>
<html lang="en">
<head>
    @extends('template')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="background">

    <div class="main-wrapper-landing gap-3">

        <div class="logo-wrapper-landing "><img src="{{asset("images/logo_wtitle.png")}}" alt="" class="w-full h-full"></div>
        
        <div class="flex sm:flex-row">
                {{-- 
                <div class="w-[500px] h-full bg-slate-100"> 
                    other

                </div> --}}

                <div class="sub-wrapper-landing"> 

                    @include("components.login-form")

                </div>
            </div>
    </div>
    
</body>
</html>