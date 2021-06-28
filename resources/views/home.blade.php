@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                        <div class="container">

                            <h2 class="text-center">Laravel 5.5 Countries Lists</h2>



                            @if($countries->count())

                                @foreach($countries as $country)

                                    <span style="padding: 5px;"> {!! $country->flag['flag-icon'] !!} {!! $country->name->common !!} </span>

                                @endforeach

                            @endif

                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
