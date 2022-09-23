{{-- @extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                    <div class=”panel-heading”>
                         Bienvenue chers utilisateur dans votre tableau de bord!.
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.user')

@section('title')
Dashboard admin
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="card-title text-primary text-center">Tableau de bord</h4>
                        {{-- <p class="category"> Here is a subtitle for this table</p> --}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        <a href="Utilisateurs.profil_utilisateur">
                                            <div class="card-title text-primary text-center">
                                                Mes informations
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">

                                    </div>

                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title text-primary text-center">
                                            Mes demandes
                                        </div>
                                    </div>
                                    <div class="card-body">

                                    </div>

                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        <a href="Utilisateurs.reservation">
                                            <div class="card-title text-primary text-center">
                                                Faire une reservation
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">

                                    </div>

                                </div>
                            </div>
                        </div>
                    {{-- <div class="table-responsive">
                        <table class="table">
                        <thead class=" text-primary">
                            <th>Mes informations</th>
                            <th>Mes demandes</th>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Dakota Rice</td>
                            <td>Niger</td>
                            </tr>
                        </tbody>
                        </table>
                    </div> --}}
                    </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
@endsection

