@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>New user registration</h3>
                        <button type="button" class="btn btn-info btn-sm justify-content-end">+new user</button>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('phone.update', $phone->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="phone" class="form-label">phone</label>
                                <input name="phone" type="text" class="form-control" value="{{ $phone->phone }}">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="user_id" class="form-label">User id</label>
                                <input name="user_id" type="integer" class="form-control" value="{{ $phone->user_id }}">
                                @error('user_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 justify-content-center">
                                <button type="submit" class="btn btn-primary d-flex btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection