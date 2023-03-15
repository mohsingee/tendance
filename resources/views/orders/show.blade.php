@include('layouts.header')
<!-- BEGIN .main-heading -->
<header class="main-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="page-icon">
                    <i class="icon-text"></i>
                </div>
                <div class="page-title">
                    <h3>Order Detail</h3>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <div class="daterange-container">
                    <a data-toggle="tooltip" class="btn btn-info btn-sm btn-create"
                       href="{{ route('orders.index') }}">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END: .main-heading -->
<!-- BEGIN .main-content -->
<div class="main-content">
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="row p-4">
                    <div class="col-md-6">
                        <p><b>Name: </b><span>{{ $order->name }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><b>Email: </b><span>{{ $order->email }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><b>Phone: </b><span>{{ $order->phone_number }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><b>Service: </b><span>{{ $order->service }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><b>Object name: </b><span>{{ $order->object_name }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><b>Visiting date: </b><span>{{ $order->visit_date }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><b>Message: </b><span>{{ $order->message }}</span></p>
                    </div>
                </div>
                <div class="table-responsive">
                    <!--Table-->
                    <table class="table">
                      <!--Table head-->
                      <thead>
                        <tr>
                          <th class="th-lg">#</th>
                          <th class="th-lg">Title</th>
                          <th class="th-lg">Price</th>
                          <th class="th-lg">Image</th>
                        </tr>
                      </thead>
                      <!--Table head-->
                      <!--Table body-->
                      <tbody>
                        @foreach ($order->order_item as $key=>$item)
                        <tr>
                          <th>{{ $key+1 }}</th>
                          <td>{{ $item->product->title }}</td>
                          <td>${{ $item->product->price }}</td>
                          <td><img src="{{ asset('assets/shop/'.$item->product->image) }}" width="70" alt=""></td>
                        </tr>
                        @endforeach
                      </tbody>
                      <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: .main-content -->
@include('layouts.footer')
