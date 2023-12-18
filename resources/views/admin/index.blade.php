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
                    <div class="col-xl-6 col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-2">{{ $products->count() }}</h3>
                                        </div>
                                    </div>

                                </div>
                                <h6 class="text-muted font-weight-normal">Products Quantity</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-2">{{ $orders->count() }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal">Orders Quantity</h6>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Events</h4>
                                <canvas id="transactionHistory" class=""></canvas>
                                <div
                                    class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                    <div class="text-md-center text-xl-left">
                                        <h6 class="mb-1">Creating Products</h6>
                                        <p class="text-muted mb-0">Lates Product:
                                            <?php
                                            // $latestProduct = App\Models\Product::latest()->first();
                                            // $lastProductDate = date('j F Y', strtotime($latestProduct->created_at));
                                            // echo $lastProductDate;
                                            ?>
                                        </p>
                                    </div>

                                </div>
                                <div
                                    class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                    <div class="text-md-center text-xl-left">
                                        <h6 class="mb-1">Sold Orders</h6>
                                        <p class="text-muted mb-0">Latest Order:
                                            <?php
                                            // $latestOrder = App\Models\Order::latest()->first();
                                            // $lastOrderDate = date('j F Y', strtotime($latestOrder->created_at));
                                            // echo $lastOrderDate;
                                            ?>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title mb-1">Products</h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="preview-list">
                                            @foreach ($products as $index => $item)
                                                @if ($index < 5)
                                                    <div class="preview-item border-bottom">
                                                        <div class="preview-thumbnail">
                                                            <div class="preview-icon bg-primary">
                                                                <img src="{{ asset($item->image) }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="preview-item-content d-sm-flex flex-grow">
                                                            <div class="flex-grow">
                                                                <h6 class="preview-subject">{{ $item->name }}</h6>
                                                                <p class="text-muted mb-0">Product Cost:
                                                                    {{ $item->cost }} so'm</p>
                                                            </div>
                                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                                <p class="text-muted">
                                                                    {{ $item->created_at->diffForHumans() }}</p>
                                                                <p class="text-muted mb-0">Creator: <span
                                                                        style="color: rgb(197, 16, 16)">{{ $item->user_name }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('transactionHistory').getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Products', 'Orders'],
                datasets: [{
                    label: 'Quantity',
                    data: [<?php echo $products->count(); ?>, <?php echo $orders->count(); ?>],
                    backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                    borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 0 // Adjust if you want integer y-axis values
                    }
                }
            }
        });
    });
</script>

<!-- container-scroller -->
