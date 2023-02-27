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
                                    <th>Nama Pesantren</th>
                                    <th>Alamat</th>
                                    <th>Asal Daerah</th>
                                    <th>Nama Pengasuh</th>
                                    <th>Foto Pengasuh</th>
                                    <th>Kata-Kata Pengasuh</th>
                                    <th>Instagram</th>
                                    <th>Tiktok</th>
                                    <th>Youtube</th>
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <th>Website</th>
                                    <th>Map</th>
                                    <th>Lgo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($profiles as $profiles_row)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $profiles_row->nama_pesantren }}</td>
                                        <td>{{ $profiles_row->alamat_lengkap }}</td>
                                        <td>{{ $profiles_row->regional->nama }}</td>
                                        <td>{{ $profiles_row->nama_pengasuh }}</td>
                                        <td>
                                            <img src="{{ '/storage/' . $profiles_row->foto_pengasuh }}"
                                                style="width:200px; height:140px; border-radius:0px !important; ">
                                        </td>
                                        <td>{{ $profiles_row->quote_pengasuh }}</td>
                                        <td>{{ $profiles_row->instagram }}</td>
                                        <td>{{ $profiles_row->tiktok }}</td>
                                        <td>{{ $profiles_row->youtube }}</td>
                                        <td>{{ $profiles_row->facebook }}</td>
                                        <td>{{ $profiles_row->twitter }}</td>
                                        <td>{{ $profiles_row->website }}</td>
                                        <td>{{ $profiles_row->link_map }}</td>
                                        <td>
                                            <img src="{{ '/storage/' . $profiles_row->logo_ponpes }}"
                                                style="width:200px; height:140px; border-radius:0px !important; ">
                                        </td>
                                        <td>
                                            <img src="{{ '/storage/' . $profiles_row->foto_gedung }}"
                                                style="width:200px; height:140px; border-radius:0px !important; ">
                                        </td>
                                        <td>
                                            <img src="{{ '/storage/' . $profiles_row->foto_kegiatan }}"
                                                style="width:200px; height:140px; border-radius:0px !important; ">
                                        </td>
                                        <td>{{ $profiles_row->sejarah_pesantren }}</td>
                                        <td>{{ $profiles_row->program_pesantren }}</td>
                                        <td>{{ $profiles_row->jumlah_santri }}</td>
                                        <td>
                                            <form action="/crew/{{ $profiles_row->id }}" class="d-inline" method="post">
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
