<!-- ===== ROW 1: 3 Stat Cards ===== -->
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="small-box card-stat card-stat-products">
            <div class="inner">
                <div class="stat-icon"><i class="fas fa-utensils"></i></div>
                <h3>{{ $totalProducts }}</h3>
                <p>Total Produk</p>
            </div>
            <a href="{{ route('products.index') }}" class="small-box-footer">
                Lihat Semua <i class="fas fa-arrow-circle-right ml-1"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-12">
        <div class="small-box card-stat card-stat-ratings">
            <div class="inner">
                <div class="stat-icon"><i class="fas fa-star"></i></div>
                <h3>{{ number_format($avgRating, 1) }} <small style="font-size:1rem;opacity:0.7;">/ 5</small></h3>
                <p>Rating Rata-rata</p>
            </div>
            <a href="{{ route('admin.reviews.index') }}" class="small-box-footer">
                Lihat Detail <i class="fas fa-arrow-circle-right ml-1"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-12">
        <div class="small-box card-stat card-stat-reviews">
            <div class="inner">
                <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
                <h3>{{ $approvedReviews }}</h3>
                <p>Review Disetujui</p>
            </div>
            <a href="{{ route('admin.reviews.index') }}" class="small-box-footer">
                Lihat Semua <i class="fas fa-arrow-circle-right ml-1"></i>
            </a>
        </div>
    </div>
</div>

<!-- ===== ROW 2: Single Chart ===== -->
<div class="row">
    <!-- Rating Distribution Chart -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title mb-0">
                    <i class="fas fa-chart-bar mr-2 text-warning"></i>
                    Distribusi Rating
                </h3>
            </div>
            <div class="card-body">
                @if($ratingDistribution->sum('count') > 0)
                    <div class="rating-bars">
                        @foreach($ratingDistribution as $item)
                            @php 
                                $maxCount = $ratingDistribution->max('count');
                                $pct = $maxCount > 0 ? ($item['count'] / $maxCount) * 100 : 0;
                                $stars = $item['rating'];
                                $starLabels = ['1' => 'Sangat Kurang', '2' => 'Kurang', '3' => 'Cukup', '4' => 'Baik', '5' => 'Sangat Baik'];
                            @endphp
                            <div class="rating-bar-row rating-bar-row-{{ $stars }}">
                                <div class="rating-bar-label">
                                    <span class="stars-display">
                                        @for($s = 1; $s <= 5; $s++)
                                            <i class="fas fa-star {{ $s <= $stars ? 'star-active' : 'star-inactive' }}"></i>
                                        @endfor
                                    </span>
                                    <small class="text-muted ml-2">{{ $starLabels[$stars] }}</small>
                                </div>
                                <div class="rating-bar-track">
                                    <div class="rating-bar-fill" style="width: {{ max($pct, 5) }}%">
                                        <span class="rating-bar-count">{{ $item['count'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-5 text-muted">
                        <i class="fas fa-star fa-3x mb-3 d-block" style="opacity: 0.3;"></i>
                        Belum ada review untuk ditampilkan
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- ===== ROW 3: Latest Reviews ===== -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title mb-0">
                    <i class="fas fa-star mr-2 text-warning"></i>
                    Review Terbaru
                </h3>
                <div class="ml-auto">
                    <a href="{{ route('admin.reviews.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-right mr-1"></i> Semua
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Rating</th>
                                <th>Pesan</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($latestReviews as $review)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-circle" style="background: linear-gradient(135deg, {{ ['#E74C3C','#3498DB','#27AE60','#F1C40F','#9B59B6'][$review->id % 5] }} 0%, {{ ['#C0392B','#2980B9','#1E8449','#D4AC0D','#8E44AD'][$review->id % 5] }} 100%);">
                                                {{ strtoupper(substr($review->name, 0, 1)) }}
                                            </div>
                                            <div class="ml-2">
                                                <strong>{{ $review->name }}</strong>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="review-stars-admin d-flex" style="gap: 1px;">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-muted' }}" style="font-size: 0.75rem;"></i>
                                            @endfor
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-truncate d-inline-block" style="max-width: 150px;">
                                            {{ $review->message ?: '-' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-muted small">
                                            <i class="far fa-clock mr-1"></i>
                                            {{ $review->created_at->diffForHumans() }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5 text-muted">
                                        <i class="fas fa-star fa-3x mb-3 d-block" style="opacity: 0.3;"></i>
                                        Belum ada review
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>