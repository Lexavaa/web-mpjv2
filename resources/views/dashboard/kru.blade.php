@extends('admin.layouts.main')

@section('content')
    {{-- SEGINI AJA DAHHH --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $title }} TABLE</h4>
                    <p class="card-description">
                        Add <code>Crew</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor ID</th>
                                    <th>Author</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Alamat</th>
                                    <th>Whatsapp</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Keahlian</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($crew as $crews)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $crews->nomor_id_kru }}</td>
                                        <td>{{ $crews->user }}</td>
                                        <td>{{ $crews->nama_kru }}</td>
                                        <td>
                                            <img src="{{ '/storage/' . $crews->foto_kru }}"
                                                style="width:200px; height:140px; border-radius:0px !important; ">
                                        </td>
                                        <td>{{ $crews->alamat_kru }}</td>
                                        <td>{{ $crews->nomor_wa_kru }}</td>
                                        <td>{{ $crews->email_kru }}</td>
                                        <td>{{ $crews->jabatan_kru }}</td>
                                        <td>{{ $crews->keahlian_kru }}</td>
                                        <td>{{ $crews->status_kru }}</td>
                                        <td>
                                            <form action="/crew/{{ $crews->id }}" class="d-inline" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="badge badge-danger border-0 show-alert-delete-box"
                                                    data-toggle="tooltip" title='Delete'>delete</button>
                                            </form>
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
    <script src="{{ asset('dashboard/js/jquery.3.2.1.min.js') }}"></script>
    <script>
        $('.show-alert-delete-box').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Tidak Dapat Kembali!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus Sekarang!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });


        function previewImage() {
            const image = document.querySelector('#foto_kru');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewImageEdit() {
            const image = document.querySelector('#imageEdit');
            const imgPreview = document.querySelector('.img-preview-edit');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
