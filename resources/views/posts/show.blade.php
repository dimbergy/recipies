@extends ('layout')

@section ('content')



<div class="container">
    <div class="row" style="margin-bottom:50px">


    <div class="col-md-12 margintop50">
          <div class="main-heading"><h1 class="text-center">{!!html_entity_decode($recipies->name)!!}</h1></div>
          <img style="width:100%" class="cover-pic margintop10" src="{{ $recipies->photo}}" />
          <div class="margintop10"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; {!!html_entity_decode($recipies->tags)!!}</div>
    </div>

    <div class="col-md-8 margintop25">
          <h3>Μέθοδος εκτέλεσης</h3>
          {!!html_entity_decode($recipies->description)!!}

    </div>

    <div class="col-md-4 margintop25">
        <h3>Συστατικά</h3>
        {!!html_entity_decode($recipies->ingredients)!!}

    </div>






  </div>
</div>



@endsection
