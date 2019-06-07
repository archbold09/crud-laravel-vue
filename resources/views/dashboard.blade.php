@extends('layout')

@section('content')

    <div class="row" id="app">
        <div class="col-xs-12">
            <h1 class="page-header"> Crud Laravel + Vue :)</h1>
        </div>
        <div class="col-sm-7">
            <a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#create">Agregar habilidad</a>
                <table class="table table-dark table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Hablidad</th>
                    <th colspan="2">
                        &nbsp;
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="habilidad in habilidades" :key="habilidad.id">
                    <th width="10px" scope="row"> @{{habilidad.id}} </th>
                    <td> @{{habilidad.habilidad}} </td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm" v-on:click.prevent="editHabilidad(habilidad)"
                        >Editar</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteHabilidad(habilidad)"
                        >Eliminar</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        @include('create')
        @include('edit')

        <div class="col-sm-5">
            <pre>
                @{{$data}}
            </pre>
        </div>

    </div>


@endsection