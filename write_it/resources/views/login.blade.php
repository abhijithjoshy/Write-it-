@extends('master')
<title>Write_it Login</title>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .co {
        max-width: 450px;
        width: 100%;
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
</style>

<body>
    <div class="container">
        <div class="co text-end">
            <form id="login_form" action="{{ route('login') }}" onsubmit="return validateForm()">
                <!-- Email input -->
                <div class="form-outline mb-4">

                    <input type="email" id="login_mail" name="email" class="form-control" required />
                    <label class="form-label" for="login_password">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form2Example2" name="password" class="form-control" required />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->

                    </div>

                    <div class="col text-center">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="button" onclick="submitLogin()" class="btn btn-outline-primary btn-block mb-4">Sign
                    in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="#!" data-toggle="modal" data-target="#registerModal">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>


<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
