@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5"></div>
        </div>
        <div class="card">
            <div class="card-header">
                Edit Data User
            </div>
            <div class="card-body">
                <form action="{{ url('/admin/user', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="" class="control-">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-">NO HP</label>
                        <input type="text" class="form-control" name="no_handphone">
                    </div>
                    <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
