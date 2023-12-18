@include('admin.layouts.app')

<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.layouts.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.layouts.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Orders</h4>
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Mobie</th>
                                                <th>Product Name</th>
                                                <th>Created Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td>{{ $order->fullname }}</td>
                                                    <td>{{ $order->phone }}</td>
                                                    <td>{{ $order->product_name }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td><label class="badge badge-danger">Pending</label></td>
                                                    <td>
                                                        <button class="btn" style="color: orange">Change</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
