<x-guest-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-8">
                <div class="card shadow-lg border-0 rounded-lg m-5">
                    <h3 class="text-primary px-3 py-1">Register</h3>
                    <h5 class="card-title px-3 py-1">Enter your account information</h5>
                    <x-jet-validation-errors class="px-3 py-1"/>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="mb-3">Email address</label>
                                <input type="text" name="email" class="form-control"
                                       placeholder="Enter your first name">
                            </div>
                            <div class="row gx-3">
                                <div class="mb-3 col-md-12">
                                    <label class="mb-1">Full name</label>
                                    <input name="name" class="form-control" type="text"
                                           placeholder="Enter your first name">
                                </div>
                            </div>
                            <div class="row gx-3">
                                <div class="mb-3 col-md-6">
                                    <label class="mb-1" for="inputFirstName">Password</label>
                                    <input class="form-control" name="password" type="password"
                                           placeholder="Enter your first name">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="mb-1">Confirm password</label>
                                    <input class="form-control" name="password_confirmation" type="password"
                                           placeholder="Enter your first name">
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="row gx-3">
                                <div class="mb-3 col-md-3 col-sm-12">
                                    <input type="submit" class="btn btn-primary btn-block" value="Create Account">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="{{route('login')}}">Have an account? Go to login</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

