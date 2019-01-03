@extends('master')

@section('content')
    <a href="/dash" class="btn btn-primary">Back</a>
    <br>

    <div class="row">

        <div class="col-md-12">

          <h2 style="text-align: center;color: red;">
              {{$column_not_found}}
          </h2>
        </div>
    </div>
@endsection