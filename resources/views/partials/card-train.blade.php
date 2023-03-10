<section class="container mt-4">
    <div class="row">      

   
        @foreach ($trains as $train)      
        <div class="col col-6 mb-4">
            <div class="card">

                <div class="card-body">

                    {{-- TITLE --}}
                    <h4 class="card-title text-danger text-uppercase"> {{$train->company}} </h4>
                    <h6 class="card-subtitle mb-2 text-muted">Train Code: {{$train->code_train}}</h6>    

                    {{-- STATION --}}
                    <hr>
                        <h6>from {{$train->departure_station}} </h6>
                        <h6>  to {{$train->arrival_station}}</h6>
                    <hr>    

                    {{-- DAY AND TIME --}}
                    <div class="container">
                        <div class="row">
                            <div class="col col-6">
                                <span>  departure at   </span>
                                <h6>{{$train->departure_day}}  {{$train->departure_time}} </h6>
                            </div>
                            <div class="col col-6">                                 
                                <span> arrive at </span>
                                <h6> {{$train->arrival_day}} {{$train->arrival_time}} </h6>
                            </div>
                        </div> 
                    </div>
    
                    
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    {{-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> --}}
                </div>
              </div>
        </div>  
        @endforeach
    
            
    </div>
</section>