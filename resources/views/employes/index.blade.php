@extends('employes.layout')

 
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h2>ICI NOTRE CRUD</h2>
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-success btn-sm" title="Ajouter un employé">
                        Ajouter
                    </a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>type_client</th>
                                    <th>nom</th>
                                    <th>adresse</th>
                                    <th>email</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection