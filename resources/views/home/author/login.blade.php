<section class="login-page min-vh-100 d-flex align-items-center py-5">
    @php
        $loginButtonColor = '#28a745';
        $adminLoginLabel = \App\Models\Setting::getValue('admin_login_label', 'Login Admin');
    @endphp
    <style>
        .login-page {
            background: linear-gradient(135deg, #f7f8fb 0%, #ffffff 100%);
        }
        .login-card {
            border: none;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 2rem 3rem rgba(0, 0, 0, 0.08);
        }
        .login-card .login-banner {
            background: linear-gradient(180deg, #c71f1f 0%, #dc3545 100%);
            color: #fff;
        }
        .login-card .login-banner h2,
        .login-card .login-banner p {
            color: #f8f9fa;
        }
        .login-card .login-banner small {
            color: rgba(255,255,255,0.8);
        }
        .login-card .form-control:focus {
            border-color: #1fc73b;
            box-shadow: 0 0 0 0.2rem rgba(199,31,31,0.18);
        }
        .login-card .btn-login {
            background-color: {{ $loginButtonColor }};
            border-color: {{ $loginButtonColor }};
        }
        .login-card .btn-login:hover {
            background-color: {{ $loginButtonColor }};
            filter: brightness(0.92);
        }
        .password-field {
            position: relative;
        }
        .password-field .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
            transition: background-color 0.2s ease, color 0.2s ease;
        }
        .password-field .password-toggle:hover {
            background-color: rgba(0, 0, 0, 0.04);
            color: #333;
        }
        .password-field input {
            padding-right: 52px;
        }
        .login-card .form-text {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .login-close-btn {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.95);
            color: #7f1d1d;
            font-size: 1.3rem;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
            transition: transform 0.2s ease, background-color 0.2s ease;
            z-index: 2;
        }
        .login-close-btn:hover {
            background: #fff;
            color: #b91c1c;
            transform: scale(1.05);
            text-decoration: none;
        }
        @media (max-width: 991px) {
            .login-card .login-banner {
                min-height: 200px;
            }
        }

        
    </style>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10 position-relative">
                <a href="/" class="login-close-btn" aria-label="Kembali ke dashboard" title="Kembali ke dashboard">×</a>
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-5 login-banner d-flex flex-column justify-content-center p-5 text-center">
                            <h2 class="mb-3">Selamat Datang</h2>
                            <small>Pastikan data login Anda aman dan jangan bagikan kata sandi.</small>
                            <img src="/img/logobikinnagih.png" class="img-fluid mt-4" alt="Logo BiKinNagih">
                        </div>
                        <div class="col-md-7 p-5">
                            <div class="mb-4 text-center">
                                <h3 class="font-weight-bold mb-1">{{ $adminLoginLabel }}</h3>
                                <p class="text-muted mb-0">Silahkan login dengan akun Anda.</p>
                            </div>

                            @if ($errors->has('login'))
                                <div class="alert alert-danger py-3" role="alert">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    {{ $errors->first('login') }}
                                </div>
                            @endif

                            <form action="{{ url('/login') }}" method="POST" novalidate>
                                @csrf
                                <div class="form-group">
                                    <label for="login-name" class="font-weight-bold">Username/Email</label>
                                    <input id="login-name" type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Username atau email" value="{{ old('name') }}" autocomplete="username" required>
                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>

                                <div class="form-group password-field mt-3">
                                    <label for="login-password" class="font-weight-bold">Password</label>
                                    <input id="login-password" type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="********" autocomplete="current-password" required>
                                    <span class="password-toggle" onclick="togglePassword()">
                                        <i id="toggle-password-icon" class="fas fa-eye"></i>
                                    </span>
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-login btn-block btn-lg mt-4 text-white">
                                    Masuk</i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('login-password');
            const icon = document.getElementById('toggle-password-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</section> 