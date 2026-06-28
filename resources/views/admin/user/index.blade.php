<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/user/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
                <table class="table">
                        
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Action</th>
                               
                            </tr>
                            @foreach($user as $item)
                            <tr>
                                <td>{{$loop ->iteration  }}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    <a href="#" class="badge badge-success">edit</a>
                                    <a href="#" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        <table>
            </div>
        </div>
    </div>
</div>