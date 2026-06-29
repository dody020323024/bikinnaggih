<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-4">Edit User</h4>
                <form action="/admin/user/{{ $user->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name">Username</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Username" value="{{ old('name', $user->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email', $user->email) }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password Baru (opsional)</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="********">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="re_password">Konfirmasi Password</label>
                        <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror" placeholder="********">
                        @error('re_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/admin/user" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
