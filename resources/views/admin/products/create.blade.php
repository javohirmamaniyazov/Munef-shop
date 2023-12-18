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
                                        <div class="d-flex" style="margin-left: -10px;">
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Product Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    id="exampleInputName1" placeholder="Product Name">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Названия Продукта</label>
                                                <input type="text" name="rus_name" class="form-control"
                                                    id="exampleInputName1" placeholder="Названия Продукта">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Product Cost</label>
                                            <input type="number" name="cost" class="form-control"
                                                id="exampleInputEmail3" placeholder="Product Cost">
                                        </div>

                                        <div class="form-group">
                                            <label for="imageInput">File upload</label><br>
                                            <input class="form-control file-upload-info" type="file" name="image[]" multiple
                                                id="imageInput">
                                        </div>

                                        <div class="form-group" id="ingredients-container">
                                            <label for="ingredients">Ingredients</label>
                                            <div class="ingredient-row" style="display: flex;">
                                                <input type="text" name="ingredients[]" class="form-control mb-1"
                                                    placeholder="Enter the Ingredient">
                                            </div>
                                            <button type="button" style="margin: 0px" class="btn add-ingredient">
                                                <i style="font-size: 30px; margin: 0;" class="mdi mdi-plus-box"></i>
                                            </button>
                                        </div>

                                        <div class="d-flex">
                                            <div class="form-group col-6" style="margin-left: -10px;">
                                                <label for="exampleTextarea1" >Description</label>
                                                <textarea class="form-control" name="description" id="exampleTextarea1" placeholder="Type...." rows="4"></textarea>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleTextarea1">Описание</label>
                                                <textarea class="form-control" name="rus_description" id="exampleTextarea1" placeholder="Описание....." rows="4"></textarea>
                                            </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let ingredientsContainer = document.getElementById('ingredients-container');
            let addIngredientButton = document.querySelector('.add-ingredient');

            addIngredientButton.addEventListener('click', function() {
                let ingredientRow = document.createElement('div');
                ingredientRow.classList.add('ingredient-row', 'd-flex');

                let input = document.createElement('input');
                input.type = 'text';
                input.name = 'ingredients[]';
                input.classList.add('form-control');
                input.placeholder = 'Enter Ingredient';

                let closeButton = document.createElement('button');
                closeButton.type = 'button';
                closeButton.classList.add('btn', 'remove-ingredient');
                closeButton.innerHTML =
                    "<i style='font-size: 30px; margin: 0;' class='mdi mdi-close-box'></i>";

                ingredientRow.appendChild(input);
                ingredientRow.appendChild(closeButton);
                ingredientsContainer.insertBefore(ingredientRow, addIngredientButton);

                closeButton.addEventListener('click', function() {
                    ingredientsContainer.removeChild(ingredientRow);
                });
            });
        });
    </script>
