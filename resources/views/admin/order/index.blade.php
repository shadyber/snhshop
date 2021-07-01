@extends('layouts.admin')
@section('title','List of All Orders')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                <th>
                    <tr>
                        <td>Id</td>
                        <td>Cart</td>
                        <td>Address</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </th>
                </thead>

                <tbody>
                @foreach($orders as $order)
                    <tr role="row" class="odd">
                        <td>
                            {{$order->id}}
                        </td>
                        <td class="sorting_1">
                           {{$order->cart}}
                        </td>

                        <td>
                           {{$order->address}}
                        </td>
                        <td>
                            {{$order->status}}
                            created at {{$order->created_at}}
                        </td>
                        <td>
                            <a href="#"> Processoing</a>
                            <a href="#"> Pending</a>
                            <a href="#"> Sent</a>
                            <a href="#"> Completed</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
