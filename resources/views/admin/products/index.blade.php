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
                                    <h4 class="card-title">Products</h4>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> Product image </th>
                                                    <th> Product owner </th>
                                                    <th> Product name </th>
                                                    <th> Cost </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product)
                                                <tr>
                                                    <td class="py-1">
                                                        <img src="{{ asset($product->image) }}" alt="image" />
                                                    </td>
                                                    <td> {{ $product->user_name}}</td>
                                                    <td> {{ $product->name }} </td>
                                                    <td>  {{ $product->cost }} so'm </td>
                                                    <td class="d-flex" style="margin-top: 10px; border: none;">
                                                        <a href="{{ route('products.edit', $product->id) }}"
                                                            class="btn mr-2" style="background-color: orange; margin-bottom: 15px;">
                                                            <i class="mdi mdi-lead-pencil"></i>Edit</a>
                                                        <form
                                                            action="{{ route('products.destroy',  $product->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this product?')"><i class="mdi mdi-delete"></i>Delete</button>
                                                        </form>

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
