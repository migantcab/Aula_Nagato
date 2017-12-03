@extends('layouts.sidebar')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Usuários</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nome</th>
                          <th>Email</th>
                          <th>Token</th>
                          <th>sv_ID</th>
                          <th>Enviar</th>
                          <th>Editar</th>
                          <th>Deletar</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($usuarios as $usuario)
                        <tr>
                          <td>{{$usuario->id}}</td>
                          <td>{{$usuario->name}}</td>
                          <td>{{$usuario->email}}</td>
                          <td>{{substr($usuario->token,0,10)}}</td>
                          <td>{{$usuario->sv_id}}</td>
                          <td>@if(empty($usuario->token))<a href="/users/enviar/{{$usuario->id}}">Enviar</a>@endif</td>
                          <td><a href="/users/update/{{$usuario->id}}">Editar</a></td>
                          <td><a href="/users/delete/{{$usuario->id}}">Deletar</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
@endsection