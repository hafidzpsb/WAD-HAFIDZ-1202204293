@extends('navbar')
@section('isihalaman')
    <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px;">
        <div class="col-md-3">
            <div class="card">
                <form action="/login" method="POST">
                    @csrf
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Login</h5>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label" for="email"><b>Email</b></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Alamat E-Mail" value="<?php if (isset($_COOKIE['Email'])){ echo $_COOKIE['Email']; }?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password"><b>Kata Sandi</b></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Kata Sandi Anda" value="<?php if (isset($_COOKIE['Password'])){ echo $_COOKIE['Password']; }?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <div class="row mt-1 mb-2">
                            <div class="col-sm-3 col-md-3"></div>
                            <div class="col-sm-3 col-md-4">
                                <input class="ps-5 pe-5 btn btn-primary" type="submit" value="Login">
                            </div>
                        </div>
                </form>
            </div>
            <h6 class="mb-4" style="text-align: center;">Anda belum punya akun? <a href="/register">Daftar</a></h6>
        </div>
    </div>