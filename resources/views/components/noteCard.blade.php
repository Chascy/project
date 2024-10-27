<div class="card">  
         
    <h2 class="title-card"> {{$note->title}}</h2> 
    <hr class=" mt-[4px] h-[5px] bg-amber-500">

        <p class="description">{{$note->description}}</p>
    <hr class=" h-[2px] bg-orange-600">

        <p class="note-content">{{$note->context}}</p>

    <hr class=" h-[1px] bg-orange-600">

    <div class="flex flex-row mt-2">
        <div class="flex-col"> 
            
            <div class="date">
                
                <h4> date created :</h4> <h4 class="ml-2">{{ $note->created_at }}</h4>
            </div>
            <div class="date">
                <h4> date updated :</h4> <h4 class="ml-2">{{ $note->updated_at }}</h4>
            </div>
        </div>   
    

        <div class="options">
            <a href="/edit-note/{{ $note->id }}">Edit</a> 
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(233, 51, 51, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>
        </div>

    </div>
  </div>