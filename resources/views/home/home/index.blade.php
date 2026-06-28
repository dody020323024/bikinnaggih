<div class="container-fluid px-0 overflow-hidden" style="min-height: 80vh; background-color: var(--color-bg); display:flex; align-items:center;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="badge rounded-pill text-dark px-3 py-2 mb-4 fw-bold shadow-sm" style="background-color: var(--color-secondary) !important;">
                    <i class="fas fa-fire text-danger"></i> Nikmati Setiap Sensasi Renyahnya!
                </span>
                <h1 class="display-4 fw-bolder mb-4" style="line-height: 1.2;">
                    <span class="text-primary-brand">Bikin Nagih</span><br> 
                    Street Food
                </h1>
                <p class="lead mb-5 text-muted" style="font-size: 1.15rem;">
                    Dibuat dari bahan pilihan dengan racikan bumbu rahasia yang menghasilkan sensasi renyah dan rasa pedas manis yang sempurna.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="/#products" class="btn btn-brand btn-lg rounded-pill px-5 shadow-sm">Lihat Produk</a>
                    <a href="/#contact" class="btn btn-outline-dark btn-lg rounded-pill px-4" style="border-width: 2px;">Detail Kami</a>
                </div>
                
                <div class="mt-5 d-flex align-items-center">
                    <div class="d-flex me-3">
                       
                        <div class="d-flex text-warning mb-1" style="color: var(--color-secondary) !important;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 position-relative text-center">
                <!-- Decorative background blob -->
                <div class="position-absolute top-50 start-50 translate-middle" style="width: 400px; height: 400px; background: radial-gradient(circle, rgba(241,196,15,0.15) 0%, rgba(250,246,240,0) 70%); border-radius: 50%;"></div>
                
                <!-- Signature floating element -->
                <div class="floating-element">
                    @if($heroImage)
                        <img src="{{ asset($heroImage) }}" alt="Hero Bikin Nagih" class="img-fluid rounded-circle" style="width: 400px; height: 400px; object-fit: cover; border: 15px solid white; box-shadow: 0 30px 60px rgba(0,0,0,0.1);">
                    @else
                        <img src="https://images.unsplash.com/photo-1621852004158-f3bc188ace2d?auto=format&fit=crop&q=80&w=600&h=600" alt="Keripik Singkong" class="img-fluid rounded-circle" style="width: 400px; height: 400px; object-fit: cover; border: 15px solid white; box-shadow: 0 30px 60px rgba(0,0,0,0.1);">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5 my-5">
    <div class="row text-center mt-5">
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-white shadow-sm h-100" style="border-radius: 32px !important; transition: transform 0.3s; cursor:pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <div class="d-inline-flex align-items-center justify-content-center bg-light text-primary-brand rounded-circle mb-4" style="width: 80px; height: 80px;">
                    <i class="fas fa-leaf fa-2x" style="color: var(--color-primary)"></i>
                </div>
                <h4 class="font-weight-bold mb-3">100% Bahan Alami</h4>
                <p class="text-muted">Tanpa pengawet buatan. .</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-white shadow-sm h-100" style="border-radius: 32px !important; transition: transform 0.3s; cursor:pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <div class="d-inline-flex align-items-center justify-content-center bg-light text-primary-brand rounded-circle mb-4" style="width: 80px; height: 80px;">
                    <i class="fas fa-pepper-hot fa-2x" style="color: var(--color-primary)"></i>
                </div>
                <h4 class="font-weight-bold mb-3">Bumbu Melimpah</h4>
                <p class="text-muted">Setiap keping keripik dibalut dengan bumbu yang meresap sempurna.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-white shadow-sm h-100" style="border-radius: 32px !important; transition: transform 0.3s; cursor:pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <div class="d-inline-flex align-items-center justify-content-center bg-light text-primary-brand rounded-circle mb-4" style="width: 80px; height: 80px;">
                    <i class="fas fa-box-open fa-2x" style="color: var(--color-primary)"></i>
                </div>
                <h4 class="font-weight-bold mb-3">Kemasan Premium</h4>
                <p class="text-muted">Dikemas dengan ziplock tebal menjaga kerenyahan keripik lebih lama walau sudah dibuka.</p>
            </div>
        </div>
    </div>
</div>

@include('home.about.index')
@include('home.services.index')
@include('home.contact.index')
@include('home.reviews.index')
