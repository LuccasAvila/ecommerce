@extends('layouts.admin')

@section('title', 'Home')

@section('content')
<div class="section container">
    <div class="section__title">
        <h1>Pedidos</h1>
    </div>
    <table class="section__table">
        <thead>
            <tr class="table__header">
                <th>#</th>
                <th>Cliente</th>
                <th>Data</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Lorem, ipsum dolor.</td>
                <td>00/00/0000</td>
                <td>Pago</td>
                <td>
                    <button class="table__action table__action--primary"><span class="fas fa-eye"></span></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
