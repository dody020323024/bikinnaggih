<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pesan Masuk dari Pengunjung</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Tanggal</th>
                                <th>Nama Pengirim</th>
                                <th>Subjek</th>
                                <th>Status</th>
                                <th width="10%" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $msg)
                            <tr class="{{ $msg->is_read ? '' : 'bg-light' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td><small class="text-muted">{{ $msg->created_at->format('d M Y H:i') }}</small></td>
                                <td class="{{ $msg->is_read ? '' : 'font-weight-bold' }}">{{ $msg->name }}</td>
                                <td class="{{ $msg->is_read ? '' : 'font-weight-bold' }}">{{ $msg->subject ?: 'Tanpa Subjek' }}</td>
                                <td>
                                    @if($msg->is_read)
                                        <span class="badge badge-light text-muted px-2 py-1" style="border-radius: 6px;">Dibaca</span>
                                    @else
                                        <span class="badge badge-warning px-2 py-1" style="border-radius: 6px;">Baru</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.messages.show', $msg->id) }}" class="btn btn-light btn-sm text-primary"><i class="fas fa-eye"></i> Buka</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
