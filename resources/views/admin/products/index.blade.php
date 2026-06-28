<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="mb-1" style="font-family: var(--font-display); font-weight: 700;">Katalog Produk</h4>
        <p class="text-muted mb-0 small">{{ $products->count() }} produk terdaftar</p>
    </div>
    <a href="{{ route('products.create') }}" class="btn btn-primary px-3">
        <i class="fas fa-plus mr-1"></i> Tambah Produk
    </a>
</div>

<form action="{{ route('products.index') }}" method="GET" class="mb-4">
    <div class="input-group" style="max-width: 420px;">
        <input type="text" name="search" class="form-control" placeholder="Cari nama atau deskripsi produk" value="{{ $search ?? '' }}">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>

@if(session('success'))
    <div class="alert alert-success" style="border-radius: 12px;">{{ session('success') }}</div>
@endif

@if($products->isEmpty())
    <div class="text-center py-5">
        <div class="mb-3" style="font-size: 3rem; opacity: 0.2;">
            <i class="fas fa-box-open"></i>
        </div>
        <h5 style="font-family: var(--font-display);">Belum ada produk</h5>
        <p class="text-muted">Mulai dengan menambah produk baru.</p>
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            <i class="fas fa-plus mr-1"></i> Tambah Produk
        </a>
    </div>
@else
    <div class="product-card-list">
        @foreach($products as $product)
            <div class="product-card-item">
                <!-- Image -->
                <div class="product-card-image">
                    @if($product->image)
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                    @else
                        <div class="product-card-image-placeholder">
                            <i class="fas fa-image"></i>
                        </div>
                    @endif
                </div>

                <!-- Details -->
                <div class="product-card-body">
                    <div class="product-card-info">
                        <h5 class="product-card-name">{{ $product->name }}</h5>
                        @if($product->description)
                            <p class="product-card-desc">{{ Str::limit($product->description, 100) }}</p>
                        @endif
                        <div class="product-card-meta">
                            <span class="product-card-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            @if($product->is_active)
                                <span class="badge badge-success px-2 py-1" style="border-radius: 6px; font-weight: 500;">Aktif</span>
                            @else
                                <span class="badge badge-secondary px-2 py-1" style="border-radius: 6px; font-weight: 500;">Draft</span>
                            @endif
                        </div>
                    </div>
                    <div class="product-card-actions">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-outline-info" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger" title="Hapus" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
