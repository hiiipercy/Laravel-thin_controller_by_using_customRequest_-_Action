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
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control">
                                @error('password')
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $row)
                                
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->password }}</td>
                                    {{-- <td>{{ $row->phone->user_id }}</td> --}}
                                    <td>
                                        <a href="{{ route('user.edit', $row->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>

                                        <form action="{{ route('user.delete', $row->id) }}" method="post">
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
