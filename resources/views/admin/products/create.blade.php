    @include('admin.layouts.app')
    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            @include('admin.layouts.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">New Product</h4>
                                    <form class="forms-sample" action="{{ route('products.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">Product Name</label>
                                            <input type="text" name="name" class="form-control"
                                                id="exampleInputName1" placeholder="Product Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Product Cost</label>
                                            <input type="number" name="cost" class="form-control"
                                                id="exampleInputEmail3" placeholder="Product Cost">
                                        </div>

                                        <div class="form-group">
                                            <label for="imageInput">File upload</label><br>
                                            <input class="form-control file-upload-info" type="file" name="image"
                                                id="imageInput">
                                        </div>

                                        <div class="form-group" id="ingredients-container">
                                            <label for="ingredients">Ingredients</label>
                                            <div class="ingredient-row" >
                                                <input type="text" name="ingredients[]" class="form-control mb-1"
                                                    placeholder="Enter the Ingredient">
                                            </div>
                                            <button type="button" class="add-ingredient">+</button>
                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                let ingredientsContainer = document.getElementById('ingredients-container');
                                                let addIngredientButton = document.querySelector('.add-ingredient');

                                                addIngredientButton.addEventListener('click', function() {
                                                    let ingredientRow = document.createElement('div');
                                                    ingredientRow.classList.add('ingredient-row');

                                                    let input = document.createElement('input');
                                                    input.type = 'text';
                                                    input.name = 'ingredients[]';
                                                    input.classList.add('form-control');
                                                    input.placeholder = 'Enter Ingredient';

                                                    ingredientRow.appendChild(input);
                                                    ingredientsContainer.insertBefore(ingredientRow, addIngredientButton);
                                                });
                                            });
                                        </script>


                                        <div class="form-group">
                                            <label for="exampleTextarea1">Description</label>
                                            <textarea class="form-control" name="description" id="exampleTextarea1" placeholder="Type...." rows="4"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-dark">Cancel</button>
                                    </form>
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
