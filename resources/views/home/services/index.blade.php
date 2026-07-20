<div id="products" class="container py-5">
    <div class="text-center mt-3 mb-5 pb-3">
        <span class="badge rounded-pill px-3 py-2 mb-3" style="background: rgba(199, 31, 31, 0.1); color: #c71f1f; font-weight: 700; letter-spacing: 0.04em;">
            <i class="fas fa-store me-2"></i> Katalog Kami
        </span>
        <h2 class="fw-bold text-primary-brand mb-3" style="font-family: var(--font-display);">Produk Unggulan</h2>
        <p class="text-muted mx-auto" style="font-size: 1.05rem; max-width: 700px;">Pilih cemilan keripik favoritmu dari berbagai varian rasa dengan kualitas yang konsisten.</p>
    </div>

    <div class="row g-4 pt-2" style="row-gap: 10rem;">
        @forelse($products as $product)
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm overflow-hidden rounded-4 product-card" style="transition: transform 0.2s ease, box-shadow 0.2s ease; padding-top: 0.35rem; margin-bottom: 0.5rem;">
                <div class="p-4 pb-2 text-center">
                    <div class="product-image-wrapper mx-auto d-flex align-items-center justify-content-center mb-4" style="height: 180px; width: 180px; max-width: 100%; border-radius: 50%; background: linear-gradient(135deg, #fff7e6, #ffe5b4); padding: 5px; box-shadow: inset 0 0 0 1px rgba(199, 31, 31, 0.08);">
                        @if($product->image)
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                        @else
                            <div class="d-flex align-items-center justify-content-center w-100 h-100 rounded-circle bg-white text-muted">
                                <i class="fas fa-image fa-3x"></i>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="card-body text-center px-4 pb-4 pt-3">
                    <h4 class="card-title fw-bold mb-2" style="font-family: var(--font-display); color: var(--color-text);">{{ $product->name }}</h4>
                    
                    <!-- Rating Stars -->
                    <div class="mb-2">
                        @if($product->reviews_count > 0)
                            @php $starCount = round($product->rating_cache); @endphp
                            <div class="d-inline-flex align-items-center gap-1" style="direction: ltr;">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $starCount)
                                        <i class="fas fa-star" style="color: #F1C40F; font-size: 0.85rem;"></i>
                                    @else
                                        <i class="fas fa-star" style="color: #e0e0e0; font-size: 0.85rem;"></i>
                                    @endif
                                @endfor
                                <small class="text-muted ms-1">({{ $product->reviews_count }})</small>
                            </div>
                        @else
                            <div class="mb-2">
                                <small class="text-muted">Belum ada rating</small>
                            </div>
                        @endif
                    </div>
                    <p class="card-text text-muted mb-5" style="line-height: 1.6; min-height: 60px;">{{ Str::limit($product->description, 100) }}</p>
                    <div class="fw-bold mb-3" style="font-size: 1.15rem; color: #c71f1f;">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                </div>

                <div class="card-footer bg-transparent border-0 text-center px-4 pb-4 pt-3">
                    <a href="https://wa.me/6283838456428?text=Halo%20BikinNagih,%20saya%20mau%20pesan%20{{ urlencode($product->name) }}" target="_blank" class="btn btn-success w-100 rounded-pill py-2">
                        <i class="fab fa-whatsapp me-2"></i> Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted" style="font-size: 1.1rem;">Belum ada produk yang ditambahkan.</p>
        </div>
        @endforelse
    </div>
</div>