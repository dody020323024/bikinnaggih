<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Tambah Produk Baru</h3>
                <div class="card-tools">
                    <a href="{{ route('products.index') }}" class="btn btn-light btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger" style="border-radius: 10px;">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="name" class="text-muted small text-uppercase fw-bold">Nama Produk</label>
                        <input type="text" class="form-control" name="name" id="name" required value="{{ old('name') }}">
                    </div>
                    <div class="form-group mb-4">
                        <label for="description" class="text-muted small text-uppercase fw-bold">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" class="form-control">{{ old('description') }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="price" class="text-muted small text-uppercase fw-bold">Harga (Rp)</label>
                                <input type="number" class="form-control" name="price" id="price" required value="{{ old('price') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="image" class="text-muted small text-uppercase fw-bold">Gambar Produk</label>
                                <input type="file" class="form-control border-0 p-0" name="image" id="image" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="custom-control custom-switch mb-2">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" class="custom-control-input" name="is_active" id="is_active" value="1" checked>
                            <label class="custom-control-label" for="is_active">Aktifkan Produk</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="is_out_of_stock" value="0">
                            <input type="checkbox" class="custom-control-input" name="is_out_of_stock" id="is_out_of_stock" value="1">
                            <label class="custom-control-label" for="is_out_of_stock">Produk Habis</label>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary px-4">Simpan Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
