@extends('layout')

@section('index')
<section class="main-section">
            <div class="main-container">
              @foreach($recentData as $recent)
                <div class="img-main-container">
           <div class="img-container">
           <img src="{{asset('upload/images/'.$recent->image)}}" alt="">
           <p>{{$recent->name}}</p>
           </div>
           
         </div>
         @endforeach
            </div>
         

        </section>
        @endsection