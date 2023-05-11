@extends('empty')
@section('title')
       my orders
@endsection
@section('content')
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
               <h4 class="text-white"> My orders</h4>
        </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> Order date</th>
                        <th> Tracking Number</th>
                        <th> Total Price </th>
                        <th> Status </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <body>
                    @foreach($orders as $item)
                        <tr>
                            <td>{{ date('d-m-y',strtotime($item->created_at)) }} </td>
                            <td>{{ $item->tracking_no }} </td>
                            <td> {{$item->total_price}}  </td>
                            <td> {{$item->status == '0' ? 'pending': 'completed'}}  </td>
                            <td>
                                <a href="{{url('view-order/'.$item->id)}}" class="btn btn-primary"> View </a>
                            </td>
                        </tr>
                    @endforeach
                    </body>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
@endsection
