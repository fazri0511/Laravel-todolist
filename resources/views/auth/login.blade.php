@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center py-5" style="background: linear-gradient(135deg, #d6bbfb 0%, #a678f0 100%)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card auth-card shadow-sm border-4 border-purple">
                    <div class="card-body p-4 p-md-5">
                        <!-- Alert Message -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="text-center mb-4">
                            <h2 class="todo fw-bold mb-1 text-purple">To-Do-List</h2>
                            <small class="text-muted fst-italic mb-3 d-block">by <strong>Veby Saifulloh Fajri</strong></small>
                            <p class="text-purple fw-semibold">Masuk ke akun Anda</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-purple">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" name="login"
                                        class="form-control border-start-0 @error('login') is-invalid @enderror"
                                        placeholder="Email atau Username" value="{{ old('login') }}" required autofocus>
                                </div>
                                @error('login')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-purple">
                                        <i class="bi bi-key"></i>
                                    </span>
                                    <input type="password" name="password"
                                        class="form-control border-start-0 @error('password') is-invalid @enderror"
                                        placeholder="Password" required>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-purple w-100 mb-3 position-relative overflow-hidden">
                                <span class="d-flex align-items-center justify-content-center">
                                    Masuk
                                    <i class="ms-2">➜</i>
                                </span>
                            </button>

                            <div class="text-center">
                                <a href="{{ route('register') }}" class="link-purple">
                                    Belum Punya Akun? Daftar Sekarang
                                </a>
                            </div>

                            <div class="mt-4 pt-4 border-top text-purple">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="feature-icon me-2 text-purple"><i class="bi bi-check-circle"></i></div>
                                            <span class="small">Task Management</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="feature-icon me-2 text-purple"><i class="bi bi-check-circle"></i></div>
                                            <span class="small">Progress Tracking</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="feature-icon me-2 text-purple"><i class="bi bi-check-circle"></i></div>
                                            <span class="small">Team Collaboration</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="feature-icon me-2 text-purple"><i class="bi bi-check-circle"></i></div>
                                            <span class="small">Priority Settings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
