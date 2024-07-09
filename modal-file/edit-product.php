

    <div class="modal fade" id="edit-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning text-light">
                    <h1 class="modal-title"><i class="fa-solid fa-pen-to-square"></i>Edit Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../actions/edit-action.php" method="post">
                    <div class="modal-body">
                        <div class="row mt-3">
                            <div class="col">
                                <label for="productname" class="form-label">Product Name</label>
                                <input type="text" name="productname" id="productname" class="form-control">
                            </div>
                        </div>
                        <div class="row gx-2 mt-3">
                            <div class="col">
                                <label for="price" class="form-label">Price</label>
                            </div>
                            <div class="col">
                                <label for="quantity" class="form-label">Quantity</label>
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="col input-group">
                                <div class="input-group-text">$</div>
                                <input type="number" name="price" id="price" class="form-control">
                            </div>
                            <div class="col">
                                <input type="number" name="quantity" id="quantity" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-warning text-dark w-100" name="btn_edit">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

