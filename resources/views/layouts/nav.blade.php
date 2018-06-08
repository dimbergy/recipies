<nav class="navbar navbar-inverse bs-dark">
  <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/logo.png" style="margin-top:-10px; width:42px"></a>
       </div>

       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
           <li class="active"><a href="{{ url('/') }}">Homepage <span class="sr-only">(current)</span></a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="{{ url('/insert') }}">Insert</a></li>
               <li><a href="#">Sports</a></li>
               <li><a href="#">Business</a></li>
               <li><a href="#">Fashion</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="#">Gallery</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="#">Videos</a></li>
             </ul>
           </li>
         </ul>


         <form action="{{ action('RecipiesController@search') }}" method="post" class="navbar-form navbar-left form-horizontal" role="search">

            <div class="input-group">
              <input type="text" name="search" class="search-box" placeholder="Search">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn"><span class="fa fa-search"></span></button>



                                       </div>

        </form>


         <ul class="nav navbar-nav navbar-right">
           <li class="dropdown">
             <a href="#" class="dropdown-toggle navbar-img" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
             Account
             <img src="http://placehold.it/150x150" class="img-circle" alt="Profile Image" />
             </a>
             <ul class="dropdown-menu">
               <li><a href="#">Profile</a></li>
               <li><a href="#">Inbox</a></li>
               <li><a href="#">Followers</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="#">Settings</a></li>
             </ul>
           </li>
         </ul>
       </div>
     </div>
   </nav>
