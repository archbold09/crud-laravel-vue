@extends('layout')

@section('content')

    <div class="row" id="app">
        <div class="col-sm-12">
            <h1 class="headline"> Crud Laravel + Vue :)</h1>
        </div>
        <div class="col-sm-7">
            <v-btn outline color="teal" data-toggle="modal" data-target="#create">Agregar habilidad</v-btn>
                <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Hablidad</th>
                    <th colspan="4">Opciones
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="habilidad in habilidades" :key="habilidad.id">
                    <th width="10px" scope="row"> @{{habilidad.id}} </th>
                    <td> @{{habilidad.habilidad}} </td>
                    <td>
                        <v-btn icon small outline color="blue" v-on:click.prevent="editHabilidad(habilidad)"
                        ><v-icon small >edit</v-icon></v-btn>
                    </td>
                    <td>
                        <v-btn icon small outline color="red" v-on:click.prevent="deleteHabilidad(habilidad)"
                        ><v-icon small >delete</v-icon></v-btn>
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