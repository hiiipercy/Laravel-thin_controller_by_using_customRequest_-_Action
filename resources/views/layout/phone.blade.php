@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>New phone registration</h3>
                            <button type="button" class="btn btn-info btn-sm justify-content-end">+new user</button>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('phone.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="phone" class="form-label">phone</label>
                                <input name="phone" type="text" class="form-control">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="user_id" class="form-label">User id</label>
                                <input name="user_id" type="integer" class="form-control">
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

                <div class="card my-5">
                    <div class="card-header d-flex justify-content-between">
                        <h4>New dashboard</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">User Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($phone as $row)
                                
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->user_id }}</td>
                                    <td>
                                        <a href="{{ route('phone.edit', $row->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>

                                        <form action="{{ route('phone.delete', $row->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
