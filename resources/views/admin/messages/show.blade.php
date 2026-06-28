<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Detail Pesan Masuk</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.messages.index') }}" class="btn btn-light btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-borderless m-0">
                    <tbody>
                        <tr>
                            <th width="30%" class="text-muted small text-uppercase fw-bold text-right align-middle py-3 border-bottom">Pengirim</th>
                            <td class="font-weight-bold py-3 border-bottom">{{ $message->name }}</td>
                        </tr>
                        <tr>
                            <th class="text-muted small text-uppercase fw-bold text-right align-middle py-3 border-bottom">Email</th>
                            <td class="py-3 border-bottom"><a href="mailto:{{ $message->email }}" class="text-primary">{{ $message->email }}</a></td>
                        </tr>
                        <tr>
                            <th class="text-muted small text-uppercase fw-bold text-right align-middle py-3 border-bottom">Waktu Kirim</th>
                            <td class="py-3 border-bottom">{{ $message->created_at->format('d F Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th class="text-muted small text-uppercase fw-bold text-right align-middle py-3 border-bottom">Subjek</th>
                            <td class="py-3 border-bottom font-weight-bold">{{ $message->subject ?: 'Tanpa Subjek' }}</td>
                        </tr>
                        <tr>
                            <th class="text-muted small text-uppercase fw-bold text-right py-4">Isi Pesan</th>
                            <td class="py-4">
                                <div class="p-4 bg-light" style="border-radius: 12px; font-size: 1.05rem; line-height: 1.6;">
                                    {!! nl2br(e($message->message)) !!}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-transparent border-0 text-right pb-4 px-4">
                <a href="mailto:{{ $message->email }}" class="btn btn-primary px-4"><i class="fas fa-reply"></i> Balas ke Email</a>
            </div>
        </div>
    </div>
</div>
