@extends('master')

@section('My-Blog')
    Home Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($portfolio_details as $portfolio_detail)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{asset('/')}}img/{{$portfolio_detail['image']}}" class="" height="150"/>
                            <div class="card-body">
                                <h4>{{$portfolio_detail['title']}}</h4>
                                <p>{{$portfolio_detail['short-description']}}</p>
                                <a href="{{route('portfolio_detail',['id'=> $portfolio_detail['id']])}}" class="btn btn-outline-success">Read More</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
