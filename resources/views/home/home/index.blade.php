<style>
.hero-circle { width:380px; height:380px; border-radius:50%; overflow:hidden; display:inline-block; position:relative; }
.hero-circle img { width:100%; height:100%; object-fit:cover; display:block; border-radius:50%; }
.hero-circle img.custom-border { border:12px solid white; box-shadow: 0 18px 36px rgba(0,0,0,0.10); }
@media (max-width: 1200px) { .hero-circle { width:340px; height:340px; } }
@media (max-width: 992px) { .hero-circle { width:320px; height:320px; } }
@media (max-width: 768px) { .hero-circle { width:260px; height:260px; } }
@media (max-width: 576px) { .hero-circle { width:200px; height:200px; } }
</style>

<div class="container-fluid px-0"
    style="min-height:80vh;
          padding-top:100px;
          padding-bottom:40px;
          background-color:var(--color-bg);">
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-4 position-relative text-start mb-5 mb-lg-0 order-lg-1">
                <div class="position-absolute top-50 start-0 d-none d-lg-block" style="width: 380px; height: 380px; transform: translateY(-50%); left: -48px; background: radial-gradient(circle, rgba(241,196,15,0.15) 0%, rgba(250,246,240,0) 70%); border-radius: 50%;"></div>

                <div class="floating-element hero-circle">
                    @if($heroImage)
                        <img src="{{ asset($heroImage) }}" alt="Hero Bikin Nagih" class="custom-border" />
                    @else
                        <img src="/img/logobikinnagih.png" alt="Keripik Singkong" class="custom-border" />
                    @endif
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2 text-start">
                <span class="badge rounded-pill text-dark mb-4 fw-bold shadow-sm" style="background-color: var(--color-secondary) !important; font-size:0.95rem; padding:0.38rem 0.85rem;">
                    <i class="fas fa-fire text-danger"></i> Nikmati Setiap Sensasi Renyahnya!
                </span>
                <h1 class="display-5 fw-bolder mb-3" style="line-height: 1.1; font-size:2.25rem;">
                    <span class="text-primary-brand">Bikin Naggih</span><br>
                    Street Food
                </h1>
                <p class="lead mb-4 text-muted" style="font-size: 1rem;">
                    Dibuat dari bahan pilihan dengan racikan bumbu rahasia yang menghasilkan sensasi renyah dan rasa pedas manis yang sempurna.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="/#products" class="btn btn-brand rounded-pill px-4 shadow-sm">Lihat Produk</a>
                    <a href="/#contact" class="btn btn-outline-dark rounded-pill px-3" style="border-width: 2px;">Detail Kami</a>
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
