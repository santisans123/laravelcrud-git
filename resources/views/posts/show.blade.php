@extends('layouts.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-right">
            @if (Route::has('login'))
            @auth
                <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Back To Dashboard </a>
                <a class="btn btn-primary" href="/view"> Back To Home </a>
                @else
                    <a class="btn btn-primary" href="/view"> Back To Home </a>
                @endif
            @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <center>
                <div class="form-group">
                    <strong>{{ $post->title }}</strong>
                </div>
            </center>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <center>
                <div class="form-group">
                <img src="{{ url('uploads/'.$post->foto)}}" class="rounded" style="width: 550px">
                </div>
            </center>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                {{ $post->kategori }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi</strong> <br>
                {!! $post->content !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan Lainnya</strong> <br>
                {{ $post->ket }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Create at: </strong>
                    <h6>{{ $post->created_at }}</h6>
                </div>
                <div class="form-group">
                    <strong>Update at: </strong>
                    <h6>{{ $post->updated_at }}</h6>
                </div>
        </div>
    </div>
@endsection
