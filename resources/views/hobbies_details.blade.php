@extends('master')

@section('My-Blog')
    Hobbies
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($hobbies_details as $hobbies_detail)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{asset('/')}}img/{{$hobbies_detail['image']}}" class="" height="150"/>
                            <div class="card-body">
                                <h4>{{$hobbies_detail['title']}}</h4>
                                <p>{{$hobbies_detail['short-description']}}</p>
                                <a href="{{route('hobbies_detail',['id'=> $hobbies_detail['id']])}}" class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

