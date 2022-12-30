@extends('layouts.app-master')

@section('content')

@auth
<div class="container">
<!-- Image upload -->
    <div class="row align-items-start">
      <div class="panel panel-primary col">
         <div class="panel-heading">
           <h2> {{__('messages.uploadPhoto')}}</h2>
         </div>
         <div class="panel-body">
          <!-- Ja ir sanācis veiksmīgi ielādēt fotogrāfiju -->
           @if ($message = Session::get('success'))
           <div class="alert alert-success alert-block">
                 <button type="button" class="close" data-dismiss="alert">×</button>
                 <!-- Šis nāk no ImageController funkcijas store -->
                 <strong>{{ $message }}</strong>
           </div>

           <img style="width:250px" src="images/Vivatels-gallery/window/{{ Session::get('image') }}" onerror="this.onerror=null;" alt="">
           <img style="width:250px" src="images/Vivatels-gallery/indoor/{{ Session::get('image') }}" onerror="this.onerror=null;" alt="">
           <img style="width:250px" src="images/Vivatels-gallery/outdoor/{{ Session::get('image') }}" onerror="this.onerror=null;" alt="">
           <img style="width:250px" src="images/Vivatels-gallery/kitchen/{{ Session::get('image') }}" onerror="this.onerror=null;" alt="">
           <img style="width:250px" src="images/Vivatels-gallery/steps/{{ Session::get('image') }}" onerror="this.onerror=null;" alt="">
         
           @endif

           @if ($message = Session::get('warning'))
            <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
            </div>
           @endif
         
           <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
      
               <div class="mb-3">
               <label class="form-label" for="photoType">{{__('messages.category')}}:</label>
               <br>
                   <select name="productType" id="productType">
                     <option value="1">{{__('messages.windows')}}</option>
                     <option value="2">{{__('messages.out-doors')}}</option>
                     <option value="3">{{__('messages.in-doors')}}</option>
                     <option value="4">{{__('messages.kitchen')}}</option>
                     <option value="5">{{__('messages.steps')}}</option>
                   </select>
                 </div>
               <div class="mb-3">
                   <label class="form-label" for="inputImage">{{__('messages.photo')}}:</label>
                   <input 
                       type="file" 
                       name="image" 
                       id="inputImage"
                       class="form-control @error('image') is-invalid @enderror">
     
                   @error('image')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
               </div>
      
               <div class="">
                   <button type="submit" style = "background-color:#ff4f5a; color:white" class="btn">{{__('messages.postPhoto')}}</button>
               </div>
          
           </form>
         
         </div>
      </div>

   </div>
 <!-- End image upload -->  
</div>


@endauth

    <!-- gallery section -->

    <section class="about_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">{{__('messages.gallery')}}</h3>
        </div>
        <!-- This is not needed as I added more photos. I will uncomment that if the client asks
        <p class="layout_padding2-top">
          Vairāk fotogrāfiju mūsu
          <a href="https://www.facebook.com/groups/vivatels" target="_blank"
            >FaceBook grupā</a
          >
        </p>
        -->
        <div class="top-content menu">
          <label data-type="all" for="check1">{{__('messages.all-photos')}}</label>
          <label data-type="window">{{__('messages.windows')}}</label>
          
          <label data-type="outdoor">{{__('messages.out-doors')}}</label>
          <label data-type="indoor">{{__('messages.in-doors')}}</label>
          <label data-type="kitchen" for="check2">{{__('messages.kitchen')}}</label>
          <label data-type="steps">{{__('messages.steps')}}</label>
          
          <!-- I will add this section as soon as I get corresponding photos
          <label data-type="other">Citas mēbeles</label>
          -->
        </div>
        </div>
        <div class="container gallery">

        @foreach(File::glob(public_path('images/Vivatels-gallery/indoor').'/*') as $path)          
          <div class="pic indoor">
          <a
            class=""
            href="{{ str_replace(public_path(), '', $path) }}"
            data-lightbox="mygallery"
          >
              <img src="{{ str_replace(public_path(), '', $path) }}" alt="Starpistabu durvis" />  
          </a>
          @auth
          {{auth()->user()->name}}
          <form action="{{route('delete')}}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$path}}"/>
            <button type="submit" class="btn btn-dark">{{__('messages.delete')}}</button>
          </form>
          @endauth
          </div>
          @endforeach


          @foreach(File::glob(public_path('images/Vivatels-gallery/kitchen').'/*') as $path)          
          <div class="pic kitchen">
          <a
            class=""
            href="{{ str_replace(public_path(), '', $path) }}"
            data-lightbox="mygallery"
          >
          
            
              <img src="{{ str_replace(public_path(), '', $path) }}" alt="Virtuve" />
          
          </a>
          @auth
          {{auth()->user()->name}}
          <form action="{{route('delete')}}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$path}}"/>
            <button type="submit" class="btn btn-dark">{{__('messages.delete')}}</button>
          </form>
          @endauth 
        </div>
          @endforeach

          @foreach(File::glob(public_path('images/Vivatels-gallery/outdoor').'/*') as $path)          
          <div class="pic outdoor">
          <a
            class=""
            href="{{ str_replace(public_path(), '', $path) }}"
            data-lightbox="mygallery"
          >

              <img src="{{ str_replace(public_path(), '', $path) }}" alt="Ārējās durvis" />
          </a>
          @auth
          {{auth()->user()->name}}
          <form action="{{route('delete')}}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$path}}"/>
            <button type="submit" class="btn btn-dark">{{__('messages.delete')}}</button>
          </form>
          @endauth 
          </div>
          @endforeach

          @foreach(File::glob(public_path('images/Vivatels-gallery/window').'/*') as $path)          
          <div class="pic window">
          <a
            class=""
            href="{{ str_replace(public_path(), '', $path) }}"
            data-lightbox="mygallery"
          >
              <img src="{{ str_replace(public_path(), '', $path) }}" alt="Logs" /> 
          </a>
          @auth
          {{auth()->user()->name}}
          <form action="{{route('delete')}}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$path}}"/>
            <button type="submit" class="btn btn-dark">{{__('messages.delete')}}</button>
          </form>
          @endauth 
          </div>
          @endforeach

          @foreach(File::glob(public_path('images/Vivatels-gallery/steps').'/*') as $path)          
          <div class="pic steps">
          <a
            class="steps"
            href="{{ str_replace(public_path(), '', $path) }}"
            data-lightbox="mygallery"
          >
              <img src="{{ str_replace(public_path(), '', $path) }}" alt="Apskatīt kāpnes" />
          </a>
          @auth
          {{auth()->user()->name}}
          <form action="{{route('delete')}}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$path}}"/>
            <button type="submit" class="btn btn-dark">{{__('messages.delete')}}</button>
          </form>
          @endauth 
          </div>
          @endforeach

        </div>
      </div>
      
  <!-- Modal (not used)-->
  
<div id="myModal" class="modal">
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Dzēst attēlu</h1>
      <p>Tiešām dzēst?</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn">Atcelt</button>
        <button type="submit" class="deletebtn">Dzēst</button>
      </div>
    </div>
  </form>
</div>

  <!-- END Modal -->
    </section>

    <!-- end gallery section -->

@endsection