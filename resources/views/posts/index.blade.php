@extends ('layout')


@section ('content')

<section class="jumbotron text-center">
     <div class="container">
       <h1 class="jumbotron-heading">{{ $title }}</h1>
       <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
       <p>
         <a href="#" class="btn btn-primary">Main call to action</a>
         <a href="#" class="btn btn-default">Secondary action</a>
       </p>
     </div>
   </section>


   <div class="album text-muted">
     <div class="container">

       <div class="row">
          @foreach ($recipies as $recipy)

          <a href="/posts/{{ $recipy->id }}">
            <div class="card">
                <img src="{{ $recipy->photo }}" alt="Card image cap">
                <p class="card-text">{{ strip_tags($recipy->name) }}</p>
            </div>
          </a>

          @endforeach

       </div>

     </div>
   </div>




@endsection
