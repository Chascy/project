<header class="main-wrapper-header">
    <nav class="w-full">

        <ul class="flex justify-between items-center w-full">
            <!-- Logo and Name Section -->
            <li class="flex items-center gap-1">
                <img src="{{asset('images/logo_wtitle.png')}}" alt="Logo" class="w-[150px] sm:w-[180px] md:w-[200px]">
                <a href="/user-edit/{{ $user->id }}" class="sm:text-xl">{{ $note->user->name }}</a>
            </li>

            <!-- Navigation Links -->
            <div class="flex gap-4 sm:gap-6">
                <li><a href="/create" class="sm:text-lg">Create</a></li>
                <form action="{{ route('logout' , ['id' => $user->id]) }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="sm:text-lg" onsubmit="return confirm('Log out now?')">Logout</button>
                </form>
            </div>
        </ul>
            {{-- eto ginawa kong basura na code --}}

        {{-- <ul> 
                <img src="{{asset("images/logo_wtitle.png")}}" alt="" class="">

                <li><a href=""> Name </a></li>
                  
                <li class="flex flex-row gap-4">
                    <a href=""> Create  </a>
                    <a href="">Logout  </a>
                </li>
                
        </ul> --}}
    </nav>
  </header>

 