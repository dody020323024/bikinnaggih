<div id="reviews" class="container py-5">
    <div class="text-center mt-3 mb-5 pb-4"> 
        <h2 class="font-weight-bold text-primary-brand" style="font-family: var(--font-display);">Kritik & Saran</h2>
        <p class="text-muted" style="font-size: 1.1rem;">Kami ingin mendengar pendapat Anda! Beri rating dan tulis pengalaman Anda.</p>
    </div>

    <!-- Success Message -->
    @if(session('review_success'))
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <div class="alert alert-success border-0 rounded-pill px-4 py-3 text-center shadow-sm" style="border-radius: 50px !important;">
                    <i class="fas fa-check-circle me-2"></i> {{ session('review_success') }}
                </div>
            </div>
        </div>
    @endif

    <div class="row g-4">
        <!-- Existing Reviews -->
        <div class="col-lg-7">
            @if($reviews->count() > 0)
                <div class="row g-3">
                    @foreach($reviews as $review)
                        <div class="col-md-6">
                            <div class="review-card">
                                <div class="review-card-header">
                                    <div class="review-avatar" style="background: linear-gradient(135deg, {{ ['#E74C3C','#3498DB','#27AE60','#F1C40F','#9B59B6'][$review->id % 5] }} 0%, {{ ['#C0392B','#2980B9','#1E8449','#D4AC0D','#8E44AD'][$review->id % 5] }} 100%);">
                                        {{ strtoupper(substr($review->name, 0, 1)) }}
                                    </div>
                                    <div class="review-meta">
                                        <strong>{{ $review->name }}</strong>
                                        <div class="review-stars">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star {{ $i <= $review->rating ? 'star-active' : 'star-inactive' }}"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                @if($review->message)
                                    <div class="review-card-body">
                                        <p class="review-text">"{{ $review->message }}"</p>
                                    </div>
                                @endif
                                <div class="review-card-footer">
                                    <small class="text-muted">
                                        <i class="far fa-clock me-1"></i> {{ $review->created_at->diffForHumans() }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="d-flex flex-column align-items-center justify-content-center h-100 py-5">
                    <div class="empty-reviews-icon mb-4">
                        <i class="fas fa-star fa-4x" style="color: var(--color-secondary); opacity: 0.3;"></i>
                    </div>
                    <h5 class="text-muted mb-2">Belum Ada Review</h5>
                    <p class="text-muted text-center" style="max-width: 300px;">Jadilah yang pertama memberikan kritik dan saran untuk Bikin Nagih!</p>
                </div>
            @endif
        </div>

        <!-- Submit Review Form -->
        <div class="col-lg-5">
            <div class="review-form-card">
                <div class="review-form-header">
                    <h5 class="mb-0 fw-bold">
                        <i class="fas fa-pen me-2" style="color: var(--color-primary);"></i>
                        Tulis Review
                    </h5>
                </div>
                <div class="review-form-body">
                    <form action="/review" method="POST">
                        @csrf
                        
                        <!-- Name -->
                        <div class="form-group mb-4">
                            <label class="form-label fw-bold small text-uppercase text-muted mb-2">Nama Anda</label>
                            <input type="text" class="form-control form-control-custom" name="name" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-4">
                            <label class="form-label fw-bold small text-uppercase text-muted mb-2">Email</label>
                            <input type="email" class="form-control form-control-custom" name="email" placeholder="Masukkan email aktif" required>
                        </div>

                        <!-- Product Selection -->
                        <div class="form-group mb-4">
                            <label class="form-label fw-bold small text-uppercase text-muted mb-2">Pilih Produk</label>
                            <select name="product_id" class="form-control form-control-custom" required>
                                <option value="">Pilih produk yang Anda review</option>
                                @foreach($reviewProducts as $product)
                                    <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                                @endforeach
                            </select>
                            @error('product_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Star Rating -->
                        <div class="form-group mb-4">
                            <label class="form-label fw-bold small text-uppercase text-muted mb-2">Rating</label>
                            <div class="star-rating">
                                <input type="radio" name="rating" value="1" id="star1"><label for="star1" class="star-label"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating" value="2" id="star2"><label for="star2" class="star-label"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating" value="3" id="star3"><label for="star3" class="star-label"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating" value="4" id="star4"><label for="star4" class="star-label"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating" value="5" id="star5" checked><label for="star5" class="star-label"><i class="fas fa-star"></i></label>
                            </div>
                            <div class="rating-text mt-2">
                                <small class="text-muted" id="rating-text">Sangat Baik!</small>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group mb-4">
                            <label class="form-label fw-bold small text-uppercase text-muted mb-2">Kritik & Saran</label>
                            <textarea name="message" class="form-control form-control-custom" rows="3" placeholder="Ceritakan pengalaman Anda dengan produk kami..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-brand w-100 py-3">
                            <i class="fas fa-paper-plane me-2"></i> Kirim Review
                        </button>

                        <p class="text-muted small text-center mt-3 mb-0">
                            <i class="fas fa-shield-alt me-1"></i> Review akan ditampilkan setelah disetujui admin.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ratingInputs = document.querySelectorAll('.star-rating input[type="radio"]');
    const ratingText = document.getElementById('rating-text');
    const labels = document.querySelectorAll('.star-label');
    
    const ratingMessages = {
        1: 'Sangat Kurang 😞',
        2: 'Kurang 😐',
        3: 'Cukup Baik 🙂',
        4: 'Baik 😊',
        5: 'Sangat Baik! 😍'
    };

    // Set initial state (5 stars checked by default)
    updateStars(5);

    ratingInputs.forEach(input => {
        input.addEventListener('change', function() {
            updateStars(parseInt(this.value));
        });

        input.addEventListener('mouseenter', function() {
            highlightStars(parseInt(this.value));
        });
    });

    // Reset on mouse leave from rating container
    document.querySelector('.star-rating').addEventListener('mouseleave', function() {
        const checked = document.querySelector('.star-rating input[type="radio"]:checked');
        if (checked) {
            updateStars(parseInt(checked.value));
        }
    });

    function updateStars(rating) {
        labels.forEach((label, index) => {
            const star = label.querySelector('i');
            if (index < rating) {
                star.className = 'fas fa-star';
                star.style.color = '#F1C40F';
                star.style.textShadow = '0 0 10px rgba(241, 196, 15, 0.5)';
            } else {
                star.className = 'far fa-star';
                star.style.color = '#ddd';
                star.style.textShadow = 'none';
            }
        });
        ratingText.textContent = ratingMessages[rating] || '';
    }

    function highlightStars(rating) {
        labels.forEach((label, index) => {
            const star = label.querySelector('i');
            if (index < rating) {
                star.className = 'fas fa-star';
                star.style.color = '#F1C40F';
                star.style.textShadow = '0 0 15px rgba(241, 196, 15, 0.8)';
            } else {
                star.className = 'far fa-star';
                star.style.color = '#ddd';
                star.style.textShadow = 'none';
            }
        });
        ratingText.textContent = ratingMessages[rating] || '';
    }
});
</script>
