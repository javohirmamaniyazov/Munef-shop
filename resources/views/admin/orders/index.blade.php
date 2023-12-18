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
                                                    @if ($order->status == 'In Progress')
                                                        <td><label class="badge badge-warning">In progress</label></td>
                                                    @endif
                                                    @if ($order->status == 'Complete')
                                                        <td><label class="badge badge-success">Complete</label></td>
                                                    @endif
                                                    <td>
                                                        <button class="btn btn-info" data-toggle="modal"
                                                            data-target="#changeOrderModal{{ $order->id }}">Change</button>
                                                    </td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade" id="changeOrderModal{{ $order->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="changeOrderModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="changeOrderModalLabel">
                                                                    Change Order Status</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to change the order status?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <form method="POST"
                                                                    action="{{ route('admin.orders.changeStatus', $order->id) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <input type="hidden" name="status"
                                                                        value="Complete">
                                                                    <button type="submit"
                                                                        class="btn btn-success">Complete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->
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
