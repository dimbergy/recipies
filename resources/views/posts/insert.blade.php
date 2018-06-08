@extends ('layout')


@section ('content')

<section class="jumbotron text-center">
     <div class="container">
       <h1 class="jumbotron-heading">Insert data</h1>
       <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
       <p>
         <a href="#" class="btn btn-primary">Primary action</a>
         <a href="#" class="btn btn-default">Secondary action</a>
       </p>
     </div>
   </section>


   <div class="album text-muted">
     <div class="container insert-form">

       <div class="row">



         		<h2>Material design input.</h2>

            <form action="#" method="POST">
         		<div class="mat-input">
                         <div class="mat-input-outer">
                             <input type="text" name="name" autocomplete="off"/>
                             <label class="">Name</label>
                             <div class="border"></div>
                         </div>
                     </div>

                     <div class="mat-input">
                                  <div class="mat-input-outer">
                                      <input type="text" name="tags" autocomplete="off"/>
                                      <label class="">Tags</label>
                                      <div class="border"></div>
                                  </div>
                              </div>

                              <div class="mat-input">
                                           <div class="mat-input-outer">
                                              <div class="border tarea"></div>
                                               <textarea name="ingredients" autocomplete="off"></textarea>
                                               <label class="">Ingredients</label>

                                           </div>
                                       </div>

                                       <div class="mat-input">
                                                    <div class="mat-input-outer">
                                                      <div class="border tarea"></div>
                                                      <textarea name="description" autocomplete="off"></textarea>
                                                        <label class="">Description</label>

                                                    </div>
                                                </div>

                                                <div class="mat-input">
                                                             <div class="mat-input-outer">
                                                                 <input type="text" name="photo" autocomplete="off"/>
                                                                 <label class="">Photo Link</label>
                                                                 <div class="border"></div>
                                                             </div>
                                                         </div>

                                              <div class="mat-input">
                                                <div class="mat-input-outer">
                                                                          <button type="submit" class="btn" name="submit"/>Update</button>


                                                                        </div>
                                                                      </div>
                        </form>
       </div>

     </div>
   </div>

@endsection
