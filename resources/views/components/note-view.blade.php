<div class="main-wrapper-create  absolute top-[50px] lg:top-[75px] object-top">  {{-- ganito mag kabit sa top--}}
    

    <form action="" class=" content-between justify-between h-[410px]">
    
      <div class="sub-header-wrapper">
 

        
          <div class="flex flex-col justify-center mx-5 mt-4 ">
              <label for="title" class="label-format  ">Note Title:</label>
              <p class="view-title"> {{ $note->title }}
              </p>
          </div>
      </div>

    
        <div class="flex flex-col min-h-[100px] mt-20 gap-1"> 

          {{-- description input box --}}   
          <div class="flex flex-col  ">  
            <label for="description" class="label-format">Description:</label>                        
            <p class="view-description" >{{ $note->description }}</p>
          </div>


          {{-- search ko kung pano gawin responsive si text area --}}
          <div class="flex flex-col ">    
            <label for="note" class="label-format">Note Content :</label>
            <p class="view-content">{{ $note->context }}</p>
          </div>                 

          
            <div class="button-option">
              <button type="submit" class=" notok ">Delete </button>
              <button type="submit" class=" ok">return </button>
          </div>
        </div>    
     </form>


</div>
