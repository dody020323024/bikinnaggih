<div id="contact" class="container py-5">
    <style>
        .contact-info-title {
            font-family: var(--font-display);
            font-weight: 800;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
        .contact-card {
            background: rgba(231, 76, 60, 0.06);
            border: 1px solid rgba(231, 76, 60, 0.12);
            border-radius: 24px;
            padding: 32px 24px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            font-family: var(--font-display);
        }
        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(0,0,0,0.08);
        }
        .contact-card .icon-wrapper {
            width: 72px;
            height: 72px;
            background: #fff;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            margin-bottom: 18px;
        }
        .contact-card h6 {
            margin-bottom: 0.6rem;
            letter-spacing: 0.12em;
            font-size: 0.85rem;
            font-weight: 800;
            text-transform: uppercase;
            color: #6c757d;
        }
        .contact-card p,
        .contact-card a {
            margin-bottom: 0;
            color: var(--color-text);
            line-height: 1.6;
            font-weight: 700;
            font-size: 1rem;
        }
        .contact-card a {
            text-decoration: none;
        }
        .contact-card a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="text-center my-4 mb-5 pb-3">
      <h2 class="font-weight-bold text-primary-brand contact-info-title">Informasi Kontak</h2>
      <p class="text-muted" style="font-size: 1.1rem;">Hubungi kami untuk informasi lebih lanjut.</p>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-lg-3 col-md-6">
            <div class="contact-card text-center h-100">
                <div class="icon-wrapper mx-auto">
                    <i class="fab fa-whatsapp fa-2x text-primary-brand"></i>
                </div>
                <h6 class="text-muted small text-uppercase fw-bold">WhatsApp</h6>
                <p class="font-weight-bold"><a href="https://wa.me/6283838456428" target="_blank" rel="noopener noreferrer">0838-3845-6428</a></p>
            </div>
        </div>

       

        <div class="col-lg-3 col-md-6">
            <div class="contact-card text-center h-100">
                <div class="icon-wrapper mx-auto">
                    <i class="fab fa-instagram fa-2x text-primary-brand"></i>
                </div>
                <h6 class="text-muted small text-uppercase fw-bold">Instagram</h6>
                <p class="font-weight-bold"><a href="https://instagram.com/bikin_naggih" target="_blank" rel="noopener noreferrer">@bikin_naggih</a></p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="contact-card text-center h-100">
                <div class="icon-wrapper mx-auto">
                    <i class="fab fa-tiktok fa-2x text-primary-brand"></i>
                </div>
                <h6 class="text-muted small text-uppercase fw-bold">TikTok</h6>
                <p class="font-weight-bold"><a href="https://www.tiktok.com/@bikinnaggihfoods" target="_blank" rel="noopener noreferrer">@bikinnaggihfoods</a></p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="contact-card text-center h-100">
                <div class="icon-wrapper mx-auto">
                    <i class="fas fa-map-marker-alt fa-2x text-primary-brand"></i>
                </div>
                <h6 class="text-muted small text-uppercase fw-bold">Lokasi</h6>
                <p class="font-weight-bold">Jl. Akasia 3, RT.36/RW.01,Sungai Miai, Banjarmasin Utara,<br>Kota Banjarmasin, Kalimantan Selatan 70123</p>
            </div>
        </div>
    </div>
</div>