<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="/admin/user/" method="POST">
                 @csrf
                 <div class="form-group"></div>
                    <label for="name">username</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                     placeholder="username" >
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="card-body">
                 <div class="form-group"></div>
                    <label for="name">email</label>
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="email" >
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="card-body">
                 <div class="form-group"></div>
                    <label for="name">password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="*******" >
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                 <div class="card-body">
                 <div class="form-group"></div>
                    <label for="name">konfirmasi password</label>
                    <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror" placeholder="*******" >
                        @error('re_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary">SImpan</button>
                </form>
          </div>
        </div>
      </div>
</div>