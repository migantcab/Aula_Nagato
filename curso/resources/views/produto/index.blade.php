@extends('layouts.sidebar')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Produtos</h2>
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
                          <th>Codigo</th>
                          <th>Nome do Produto</th>
                          <th>Qt</th>
                          <th>Preço</th>
                          <th>Editar</th>
                          <th>Deletar</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($produtos as $produto)
                        <tr>
                          <td>{{$produto->codigo}}</td>
                          <td>{{$produto->nome}}</td>
                          <td>{{$produto->qt}}</td>
                          <td>{{$produto->preco_unitario}}</td>
                          <td><a href="/produtos/update/{{$produto->_id}}">Editar</a></td>
                          <td><a href="/produtos/delete/{{$produto->_id}}">Deletar</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
@endsection