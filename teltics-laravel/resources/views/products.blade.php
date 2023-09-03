<div class="d-flex justify-content-between"> 
    <div> 

        <p style="font-family: 'Hanken Grotesk', sans-serif; color:#101010; font-weight: bold; font-size: 30px; margin-left: 50px"> 
            Products 
            
        </p>
        <p style="font-family: 'Hanken Grotesk', sans-serif; color:#CA171E; margin-left: 50px"> 
            What we can do for you
        </p>
    </div>
    <div> 
        <button class="btn btn-outline-danger" style="margin-right: 20px"> 
            VIEW ALL
        </button>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($product as $key => $value)
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="{{asset('images/'.$value->image)}}" class="card-img-top" style="height:200px">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">{{$value->name}}</h5>
            </div>
          </div>
        </div>  
        @endforeach
    </div>
</div>
