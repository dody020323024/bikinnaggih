<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title mb-0">
                    <i class="fas fa-star mr-2" style="color: var(--admin-primary);"></i>
                    Kritik & Saran
                </h3>
                <span class="badge badge-info ml-3">{{ $reviews->count() }} total</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Rating</th>
                                <th>Pesan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th style="width: 120px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($reviews as $review)
                            <tr class="{{ $review->is_approved ? '' : 'unread-row' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <strong>{{ $review->name }}</strong>
                                </td>
                                <td>{{ $review->email }}</td>
                                <td>
                                    <div class="review-stars-admin">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-muted' }}" style="font-size: 0.8rem;"></i>
                                        @endfor
                                        <span class="ml-1 small text-muted">({{ $review->rating }}/5)</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-truncate" style="max-width: 200px; display: inline-block;">
                                        {{ $review->message ?: '-' }}
                                    </span>
                                </td>
                                <td>
                                    <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                                </td>
                                <td>
                                    @if($review->is_approved)
                                        <span class="badge badge-success px-2 py-1" style="border-radius: 6px;">Disetujui</span>
                                    @else
                                        <span class="badge badge-warning px-2 py-1" style="border-radius: 6px;">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('admin.reviews.approve', $review->id) }}" 
                                           class="btn btn-{{ $review->is_approved ? 'warning' : 'success' }}"
                                           title="{{ $review->is_approved ? 'Tolak' : 'Setujui' }}">
                                            <i class="fas fa-{{ $review->is_approved ? 'times' : 'check' }}"></i>
                                        </a>
                                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus review ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-5 text-muted">
                                    <i class="fas fa-star fa-3x mb-3 d-block" style="opacity: 0.3;"></i>
                                    Belum ada review yang masuk
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
