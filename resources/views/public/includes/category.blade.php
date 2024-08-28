   <!-- Category Start -->
   <div class="container-xxl py-5">
   
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                
                <div class="row g-4">
                @foreach($categories as $category) 
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                  
                        <a class="cat-item rounded p-4" href="">
                           <!-- <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i> -->
                           <img class="flex-shrink-0 img-fluid border rounded" src="{{asset('assets/img/categories/'.$category['image'])}}" alt="" style="width: 80px; height: 80px;">
                            <br><br>
                           <h6 class="mb-3">{{$category['category_name']}}</h6>
                            <p class="mb-0"> {{$category['no_of_vacancy']}} Vacancy</p>
                        </a>
                    </div>
                    @endforeach
                </div>
             </div>
        </div>
        <!-- Category End -->