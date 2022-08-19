<head>
    <link href="{{ url('css/admin_order_list.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    @foreach($orders as $order)
                    @if($order->order_status == 'pending')
                    <p style="float: right"><i class="bi bi-stopwatch"></i> Pending</p>
                    @elseif($order->order_status == 'completed')
                    <p style="float: right"><i class="bi bi-check2-circle"></i> Completed</p>
                    @endif
                    
                    <h5 class="card-title">Order Item</h5>
                    <hr>
                    <table class="table" style="font-size: 0.9rem;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <?php
                            $i = 1;
                            $total = 0;
                            $count= 0;
                        ?>
                        <tbody>
                            @foreach($orderItems as $item)
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td>
                                @if($item->type== "stationery")
                                <img class="img-fluid" src="{{asset('images/')}}/{{$item->stationery->stationery_image}}" alt="stationery" style="height: 150px; width:200px; object-fit:cover;">
                                @elseif($item->type== "book")
                                <img class="img-fluid" src="{{asset('images/')}}/{{$item->book->book_image}}" alt="book" style="height: 150px; width:200px; object-fit:cover;">
                                @endif
                                </td>
                                <td><span style="color: grey; font-size: 0.8rem;">{{$item->ISBN}}</span><br>
                                @if($item->type== "stationery")
                                <p>{{$item->stationery->stationery_title}}</p>
                                @elseif($item->type== "book")
                                <p>{{$item->book->book_title}}</p>
                                @endif
                                </td>
                                <td>{{$item->quantity}}</td>
                                <td>RM{{number_format($item->price, 2)}}</td>
                                <td>RM{{number_format($item->subtotal, 2)}}</td>
                            </tr>
                            <?php
                                $i++;
                                $count++;
                                $total += $item->subtotal;
                            ?>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div style="text-align: right; color: gray;">
                        <p class="card-text">Total {{$count}} item(s)<p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p class="card-text">Product Price: </p>
                            @if($order->state == "Sabah" || $order->state == "Sarawak")
                            <p class="card-text">Shipping Fee (East Malaysia): </p>
                            @else
                            <p class="card-text">Shipping Fee (West Malaysia): </p>
                            @endif
                            <h4 class="card-title mt-2">Grand Total :</h4>
                        </div>
                        <div class="col-md-6 col-sm-6" style="text-align: right;">
                            <p>RM{{$total}}</p>
                            @if($order->state == "Sabah" || $order->state == "Sarawak")
                            <p class="card-text">RM10.00</p>
                            @else
                            <p class="card-text">RM7.00</p>
                            @endif
                            <h4 class="card-title mt-2">RM{{number_format($order->order_amount, 2)}}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <br>
            <form action="{{route('update_order_status')}}" method="POST">
            @CSRF
                @foreach($orders as $order)
                <div class="container-fluid" style="background-color:white; padding:15px">
                    <p style="float:left; padding-right:50px">Order Status:</p>
                    <input type="hidden" name="order_ID" value="{{$order->id}}">
                    <div class="form-check form-check-inline" style="padding-right:25px">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="pending" {{ ($order->order_status =="pending")? "checked" : "" }}>
                        <label class="form-check-label" for="inlineRadio1">Pending</label>
                    </div>
                    <div class="form-check form-check-inline" style="padding-right:25px">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="completed" {{ ($order->order_status =="completed")? "checked" : "" }}>
                        <label class="form-check-label" for="inlineRadio2">Completed</label>
                    </div>
                    <button type="submit" class="btn btn-dark" style="margin-left: 20px; padding:auto 15px">Update</button>    
                </div>
            </form>
            
        </div>
        
        <div class="col-md-5">
            <div class="card" style="font-size: 0.9rem;">
                <div class="card-body">
                    
                    <h5 class="card-title">Order Details</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Order ID:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>{{$order->id}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Order Time:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>{{$order->created_at}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Payment Time:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>{{$order->created_at}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Customer Details</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Recipient:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>{{$order->customer_name}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Phone Number:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>{{$order->customer_phoneNo}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Shipping Address</h5>
                    <hr>
                    <p>{{$order->street}} , {{$order->zip_code}} {{$order->city}} , {{$order->state}}  </p>
                </div>
                @endforeach
            </div>
            <br>
        </div>
      
    </div>
</div>
<br><br>
@endsection