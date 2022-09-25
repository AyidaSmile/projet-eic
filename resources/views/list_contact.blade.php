@extends('layouts.master')

@section('title')
Dashboard admin
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center text-white" style="background-color: #268D72">
                      <h2>Les messages</h2>
                    </div>
                    <div class="card-body">
                        <br>
                        <br>
                        <div class="table-responsive">
                            {{-- pour voir si ça recupère avant meme d'écrire la requette  on fait {{ $contact  }} par exemple
                            . avec $contact le nom de la var déclaré dans le controller--}}
                            {{-- {{ $contact }} --}}
                            <table border="2" class="table table-success table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ( $contact as $cont )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cont->nom }}</td>
                                        <td>{{ $cont->prenom }}</td>
                                        <td>{{ $cont->email}}</td>
                                        <td>{{ $cont->message }}</td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                          <div class="text-center">
                            <a href="/dashboardAdmin">
                                <button class="btn btn-primary btn-sm">Retour</button>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
 @section('scripts')
@endsection
