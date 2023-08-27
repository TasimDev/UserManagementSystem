<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <title>User Management System</title>
</head>

<body>
    <!--Add New User Modal Start-->
    <div class="modal fade" tabindex="-1" id="addNewUserModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New User</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add-user-form" class="p-2" novalidate>
                        <div class="mb-3">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="username">Username: </label>
                                    <input type="text" name="username" 
                                        class="form-control form-control-lg" required>
                                    <div class="invalid-feedback">Username is required!</div>
                                </div>
                                <div class="col">
                                    <label for="email">Email: </label>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        required>
                                    <div class="invalid-feedback">Email is required!</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="department">Department: </label>
                                <input type="text" name="department"
                                    class="form-control form-control-lg" required>
                                <div class="invalid-feedback">Department is required!</div>
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Add User" class="btn btn-dark btn-block btn-lg"
                                    id="add-user-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Add New User Modal End-->

    <!--Edit User Modal Start-->
    <div class="modal fade" tabindex="-1" id="editUserModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-user-form" class="p-2" novalidate>
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="username">Username: </label>
                                    <input type="text" name="username" id="username"
                                        class="form-control form-control-lg" required>
                                    <div class="invalid-feedback">Username is required!</div>
                                </div>
                                <div class="col">
                                    <label for="email">Email: </label>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg"
                                        required>
                                    <div class="invalid-feedback">Email is required!</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="department">Department: </label>
                                <input type="text" name="department" id="department"
                                    class="form-control form-control-lg" required>
                                <div class="invalid-feedback">Department is required!</div>
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Update User" class="btn btn-success btn-block btn-lg"
                                    id="edit-user-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---Edit User Modal End -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-dark">User Management System</h4>
                </div>
                <div>
                    <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#addNewUserModal">Add
                        User</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div id="showAlert"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-dark ">
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Action.php method fetch all users from database-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>