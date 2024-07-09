
    <div class="modal fade" id="delete-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light text-center">
                <h1 class="modal-title display-6 fw-bold text-center">WARNING!</h1>
                <button type="button" class="btn-close" data-bs-dismiss='modal' aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 text-center">
                <i class="fa-solid fa-triangle-exclamation text-warning fa-5x"></i>
                <h2 class="text-danger mt-3">DELETE ACCOUNT</h2>
                <p class="lead">
                    Are you sure you want to<span class="text-danger">DELETE</span>your accpunt?
                </p>
            </div>
            <div class="modal-footer border-0">
                <form action="../actions/delete-action.php" method="post">
                    <a data-bs-dismiss="modal" class="btn btn-secondary btn-">Cancel</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
    </div>

