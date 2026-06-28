<div id="about" class="container py-5 my-5">
    <div class="row align-items-center">
        <div class="col-md-5 mb-5 mb-md-0 position-relative mt-4">
            <!-- Decorative element -->
            <div class="position-absolute top-0 start-0 translate-middle" style="width: 150px; height: 150px; background-color: var(--color-secondary); border-radius: 50%; z-index: -1; opacity: 0.5;"></div>
            
            @if($aboutImage)
                <img src="{{ asset($aboutImage) }}" class="img-fluid rounded-3 shadow-lg w-100" alt="Tentang Bikin Nagih" style="border: 10px solid white; border-radius: 24px !important; object-fit: cover; aspect-ratio: 1/1;">
            @else
                <img src="/img/logobikinnagih.png" class="img-fluid rounded-3 shadow-lg w-100" alt="Logo Bikin Nagih" style="border: 10px solid white; border-radius: 24px !important; object-fit: cover; aspect-ratio: 1/1;">
            @endif
            
            <!-- Floating badge -->
            <div class="position-absolute bottom-0 end-0 bg-white p-3 shadow-lg mb-n4 me-n4 text-center" style="border-radius: 20px;">
                <h3 class="font-weight-bold text-primary-brand mb-0" style="font-family: var(--font-display);">100%</h3>
                <small class="text-muted font-weight-bold">Lokal Berkualitas</small>
            </div>
        </div>
        <div class="col-md-6 offset-md-1">
            <span class="text-primary-brand font-weight-bold text-uppercase mb-2 d-block" style="letter-spacing: 2px;">Tentang Kami</span>
            <h2 class="display-5 font-weight-bold mb-4" style="line-height: 1.5; font-family: var(--font-display);">Bikin Naggih Foods Bukan Sekadar Keripik Biasa.</h2>
            <p class="lead text-muted mb-4">
                Selamat datang di Bikin Naggih Foods! Kami adalah rumah bagi para pencinta camilan yang ga bisa berhenti ngunyah. Didirikan pada tahun 2025, kami lahir dari sebuah misi sederhana: menciptakan keripik dengan kelezatan autentik, tekstur super renyah, dan varian rasa kekinian yang bener-bener... bikin naggih!
            </p>
            <p class="text-muted mb-4" style="line-height: 1.5;">
                Kami percaya bahwa camilan bukan sekadar pengganjal lapar, tapi teman setia di segala suasana. Baik saat kamu lagi dikejar deadline, nonton series favorit, atau sekadar kumpul seru bareng teman-teman, Bikin Naggih Foods siap jadi pelengkap momen serumu.
            </p>

             </p>
            <p class="text-muted mb-4" style="line-height: 1.5">
                Sejak didirikan pada tahun 2025, Bikin Naggih Foods telah tumbuh dari sekadar ide menjadi bagian dari momen ngumpul, belajar, dan bekerja ribuan pelanggan kami. Kami ingin terus melangkah, menciptakan lebih banyak senyuman lewat kerenyahan produk kami.

Bagi kami, kamu bukan hanya sekadar pembeli, tapi adalah Sobat Naggih—bagian dari keluarga besar kami.

Siap merasakan sensasi krispi yang sesungguhnya? Berhati-hatilah, karena rasa kami benar-benar bisa bikin kecanduan!
            </p>


            <div class="d-flex align-items-center mt-4 pt-2">
                <div class="me-4 pe-3 border-end">
                    <h3 class="font-weight-bold text-dark mb-0" style="font-family: var(--font-display);">4</h3>
                    <span class="text-muted small">Varian Rasa</span>
                </div>
                <div class="me-4 pe-3 border-end">
                    <h3 class="font-weight-bold text-dark mb-0" style="font-family: var(--font-display);">100%  </h3>
                    <span class="text-muted small">Terbuat dari bahan alami</span>
                </div>
                <div>
                    <h3 class="font-weight-bold text-dark mb-0" style="font-family: var(--font-display);">100%</h3>
                    <span class="text-muted small">Halal</span>
                </div>
            </div>
        </div>
    </div>
</div>