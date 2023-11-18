@extends('layout')

@section('categories')
<section class="main-section">
  <div class="category-heading">
{{$category->categories}}
</div>
<div class="main-container">
            @foreach($viewimage as $item)
            <div class="img-main-container">
          

           <div class="img-container">
            <img src="{{asset('upload/images/'.$item->image)}}" alt="">
           </div>
           <p>{{$item->name}}</p>

          
         </div>
      
         @endforeach
            </div>
        </section>
@endsection