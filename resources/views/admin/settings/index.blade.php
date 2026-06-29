<div class="settings-header mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h4 class="mb-1" style="font-family: var(--font-display); font-weight: 800;">
                <i class="fas fa-palette text-primary mr-2" style="font-size: 1.6rem;"></i>
                Pengaturan Tampilan
            </h4>
            <p class="text-muted mb-0" style="font-weight: 500;">Atur gambar pada halaman utama website</p>
        </div>
        <span class="badge px-3 py-2" style="background: linear-gradient(135deg, var(--admin-primary), #C0392B); border-radius: 100px; font-weight: 600;">
            <i class="fas fa-sync-alt mr-1"></i> Live Preview
        </span>
    </div>
    <hr class="mt-3 mb-0" style="opacity: 0.08;">
</div>

@if(session('success'))
    <div class="alert alert-success d-flex align-items-center py-3 px-4 mb-4" style="border-radius: 16px; border: none; background: linear-gradient(135deg, #d4edda, #c3e6cb);">
        <i class="fas fa-check-circle mr-3" style="font-size: 1.5rem; color: #155724;"></i>
        <div>
            <strong style="color: #155724;">Berhasil!</strong>
            <span style="color: #155724;">{{ session('success') }}</span>
        </div>
        <button type="button" class="close ml-auto" data-dismiss="alert" style="color: #155724;">&times;</button>
    </div>
@endif

<form action="{{ route('admin.settings.update') }}" method="POST" class="mb-4">
    @csrf
    <div class="card shadow-sm" style="border: 1px solid rgba(122, 31, 31, 0.12);">
        <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
                <div class="settings-icon-wrapper mr-3" style="background: linear-gradient(135deg, #7a1f1f, #a62828); color: #fff3c4;">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div>
                    <h5 class="fw-bold mb-0" style="font-family: var(--font-display); color: #7a1f1f;">Label Login Admin</h5>
                    <small class="text-muted">Nama yang muncul pada tombol Login Admin dan halaman login</small>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-md-8">
                    <label for="admin_login_label" class="form-label fw-bold">Nama yang tampil</label>
                    <input type="text" class="form-control" id="admin_login_label" name="admin_login_label" value="{{ old('admin_login_label', $adminLoginLabel) }}" placeholder="Login Admin">
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <button type="submit" class="btn btn-primary px-4 w-100" style="background: linear-gradient(135deg, #7a1f1f, #a62828); border: none;">
                        <i class="fas fa-save mr-1"></i> Simpan Label
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="row" id="settingsGrid">
    {{-- ===== HERO IMAGE ===== --}}
    <div class="col-lg-6">
        <div class="card settings-card h-100">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="settings-icon-wrapper mr-3">
                        <i class="fas fa-crown"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-0" style="font-family: var(--font-display);">Gambar Hero Utama</h5>
                        <small class="text-muted">Foto utama di halaman beranda</small>
                    </div>
                </div>

                <div class="settings-preview mb-3">
                    @if($heroImage)
                        <img src="{{ asset($heroImage) }}" alt="Hero" class="settings-preview-img" id="heroPreview" style="object-fit: cover;">
                        <div class="settings-preview-overlay">
                            <i class="fas fa-check-circle"></i> Tersimpan
                        </div>
                    @else
                        <div class="settings-empty-state">
                            <div class="empty-icon-wrapper">
                                <i class="fas fa-image"></i>
                            </div>
                            <span class="empty-title">Belum ada gambar</span>
                            <span class="empty-subtitle">Ukuran ideal: persegi (1:1)</span>
                        </div>
                    @endif
                </div>

                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="settings-upload-area">
                        <label for="hero_image" class="settings-upload-label mb-0">
                            <input type="file" name="hero_image" id="hero_image" accept="image/*" class="settings-file-input" onchange="this.form.querySelector('.settings-file-name').textContent = this.files[0]?.name || 'Belum ada file'">
                            <div class="settings-upload-trigger">
                                <i class="fas fa-cloud-upload-alt mr-2"></i>
                                <span class="settings-file-name">Pilih file gambar</span>
                            </div>
                        </label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="text-muted small"><i class="fas fa-info-circle mr-1"></i> JPG, PNG, WebP. Maks 5MB.</span>
                        <button type="submit" class="btn btn-primary px-4 btn-upload">
                            <i class="fas fa-upload mr-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ===== HEADER LOGO ===== --}}
    <div class="col-lg-6 mt-4">
        <div class="card settings-card h-100" style="border: 1px solid rgba(122, 31, 31, 0.12);">
            <div class="card-body p-4" style="background: linear-gradient(135deg, #fff8e6 0%, #fff3c4 100%); border-radius: 16px;">
                <div class="d-flex align-items-center mb-3">
                    <div class="settings-icon-wrapper" style="background: linear-gradient(135deg, #7a1f1f, #a62828); color: #fff3c4;">
                        <i class="fas fa-image"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-0" style="font-family: var(--font-display); color: #7a1f1f;">Logo Header</h5>
                        <small class="text-muted">Logo yang muncul di bagian atas website</small>
                    </div>
                </div>

                <div class="settings-preview mb-3">
                    @if($headerLogo)
                        <img src="{{ asset($headerLogo) }}" alt="Header Logo" class="settings-preview-img" style="object-fit: contain; background: #fff; padding: 12px;">
                        <div class="settings-preview-overlay" style="background: rgba(122, 31, 31, 0.9);">
                            <i class="fas fa-check-circle"></i> Tersimpan
                        </div>
                    @else
                        <div class="settings-empty-state" style="background: rgba(255,255,255,0.7);">
                            <div class="empty-icon-wrapper" style="background: linear-gradient(135deg, #7a1f1f, #a62828); color: #fff3c4;">
                                <i class="fas fa-image"></i>
                            </div>
                            <span class="empty-title" style="color: #7a1f1f;">Belum ada logo</span>
                            <span class="empty-subtitle">Ukuran ideal: persegi (1:1)</span>
                        </div>
                    @endif
                </div>

                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="settings-upload-area" style="border-color: rgba(122, 31, 31, 0.2);">
                        <label for="header_logo" class="settings-upload-label mb-0">
                            <input type="file" name="header_logo" id="header_logo" accept="image/*" class="settings-file-input" onchange="this.form.querySelector('.settings-file-name').textContent = this.files[0]?.name || 'Belum ada file'">
                            <div class="settings-upload-trigger" style="color: #7a1f1f;">
                                <i class="fas fa-cloud-upload-alt mr-2"></i>
                                <span class="settings-file-name">Pilih file logo</span>
                            </div>
                        </label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="text-muted small"><i class="fas fa-info-circle mr-1"></i> JPG, PNG, WebP. Maks 5MB.</span>
                        <button type="submit" class="btn btn-primary px-4 btn-upload" style="background: linear-gradient(135deg, #7a1f1f, #a62828); border: none;">
                            <i class="fas fa-upload mr-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ===== ABOUT IMAGE ===== --}}
    <div class="col-lg-6 mt-4">
        <div class="card settings-card h-100">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="settings-icon-wrapper" style="background: linear-gradient(135deg, #9B59B6, #8E44AD);">
                        <i class="fas fa-store-alt"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-0" style="font-family: var(--font-display);">Gambar Tentang Kami</h5>
                        <small class="text-muted">Foto di section tentang kami</small>
                    </div>
                </div>

                <div class="settings-preview mb-3">
                    @if($aboutImage)
                        <img src="{{ asset($aboutImage) }}" alt="About" class="settings-preview-img" style="object-fit: cover;">
                        <div class="settings-preview-overlay">
                            <i class="fas fa-check-circle"></i> Tersimpan
                        </div>
                    @else
                        <div class="settings-empty-state">
                            <div class="empty-icon-wrapper">
                                <i class="fas fa-image"></i>
                            </div>
                            <span class="empty-title">Belum ada gambar</span>
                            <span class="empty-subtitle">Ukuran ideal: persegi (1:1)</span>
                        </div>
                    @endif
                </div>

                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="settings-upload-area">
                        <label for="about_image" class="settings-upload-label mb-0">
                            <input type="file" name="about_image" id="about_image" accept="image/*" class="settings-file-input" onchange="this.form.querySelector('.settings-file-name').textContent = this.files[0]?.name || 'Belum ada file'">
                            <div class="settings-upload-trigger">
                                <i class="fas fa-cloud-upload-alt mr-2"></i>
                                <span class="settings-file-name">Pilih file gambar</span>
                            </div>
                        </label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="text-muted small"><i class="fas fa-info-circle mr-1"></i> JPG, PNG, WebP. Maks 5MB.</span>
                        <button type="submit" class="btn btn-primary px-4 btn-upload">
                            <i class="fas fa-upload mr-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Live preview on file select --}}
<script>
document.querySelectorAll('.settings-file-input').forEach(input => {
    input.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;

        const card = this.closest('.settings-card');
        const preview = card.querySelector('.settings-preview');
        const reader = new FileReader();

        reader.onload = function(ev) {
            preview.innerHTML = `
                <img src="${ev.target.result}" alt="Preview" class="settings-preview-img" style="object-fit: cover;">
                <div class="settings-preview-overlay" style="background: rgba(46, 204, 113, 0.9);">
                    <i class="fas fa-eye"></i> Preview
                </div>
            `;
        };
        reader.readAsDataURL(file);
    });
});
</script>
