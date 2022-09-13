@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header text-white" style="background-color: #268D72">Dashboard</div>
 
                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                    <div class=”panel-heading”>Bienvenue à EIC ous êtes bien inscrit!</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
