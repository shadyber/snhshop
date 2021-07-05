@extends('layouts.admin')
@section('title','List of Customers')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
            <th>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Orders</td>

                </tr>
            </th>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr role="row" class="odd">
                    <td>
                        <a href="/users/{{$user->id}}">   {{$user->id}}</a>

                    </td>
                    <td class="sorting_1">
                       {{$user->name}}
                    </td>

                    <td>
                         {{$user->address? $user->address->address1 : 'N/A'}}
                    </td>

                    <td>
                       {{$user->order}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection