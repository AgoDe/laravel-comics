@extends('layouts.default')

@section('section-1')

<div class="card-container container">

    <div class="article-title"> CURRENT SERIES</div>   

    <div class="flex-box">
        <!-- stampa dell'array dei fumetti -->
        @foreach ($comics as $item)
        <div>  
            <img src="{{$item['thumb'] }}" alt="">   
            <h4> {{ $item['title'] }} </h4>
        </div>
        @endforeach
    </div>

    <div class="load-button">LOAD MORE</div> 

</div>
@endsection