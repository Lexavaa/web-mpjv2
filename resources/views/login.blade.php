<x-login-layout title="Login">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="dashboard/images/logo.png" alt="logo">
                        </div>
                        <h4>Khodim Militan.</h4>
                        <h6 class="font-weight-light">Jadilah salah satu dari kami.</h6>
                        <form class="pt-3" action="/validate-login" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    id="email" placeholder="Email" required autofocus
                                    value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    id="password" placeholder="Password" required autofocus
                                    value="{{ old('password') }}">
                                    <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                        onclick="SeeMe();">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                        <p class="show">Show</p>
                                        <p class="hide" style="display: none;">Hide</p>
                                    </label>
                                </div>
                                @error('password')
                                <div class="invalid-feedback">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <u>
                                        <a type="submit" style="background-color:transparent; border:none;">Lupa
                                            Password?</a>
                                        </u>
                                </div>
                                <div class="col-md-4">
                                    <Button type="submit" class="btn btn-one"
                                    style="background-color:transparent; border:none;">Login</Button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-login-layout>