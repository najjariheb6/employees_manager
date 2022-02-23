@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cities</h1>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('City Update') }}
                    <a href="{{ route('cities.index') }}" class="float-right">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cities.update',$city->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="country_id" class="col-md-4 col-form-label text-md-end">{{ __('Country Code') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" id="state_id" name="state_id" autofocus>
                                    <option >Open This Select Menu</option>
                                    @foreach ($states as $state)
                                        <option {{$state->id==$city->state_id? "selected":""}} value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>

                                @error('state_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$city->name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="m-2 p-2">
                <form action="{{ route('cities.destroy',$city->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete {{$city->name}}</button>
                </form
            </div>
        </div>
    </div>
</div>
@endsection
