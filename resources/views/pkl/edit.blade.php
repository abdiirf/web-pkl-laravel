<!-- resources/views/peminjaman/edit.blade.php -->
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pkl - Rio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <!-- Menambahkan CSS untuk Mode Gelap -->
        <style>
            body {
                background: #121212; /* Warna latar belakang */
                color: #fff; /* Warna teks */
            }

            .navbar {
                background: #343a40 !important; /* Warna latar belakang navbar */
            }

            .card {
                background: #1e1e1e; /* Warna latar belakang card */
                color: #fff; /* Warna teks card */
            }

            /* Penyesuaian warna teks untuk link */
            a {
                color: #17a2b8;
            }

            /* Menyesuaikan warna tombol */
            .btn {
                background-color: #17a2b8;
                color: #fff;
            }

            /* Menyesuaikan warna tombol pada hover */
            .btn:hover {
                background-color: #138496;
            }

            /* Menyesuaikan warna tabel */
            table {
                color: #fff;
            }

            /* Menyesuaikan warna latar belakang tbody pada tabel */
            tbody {
                background: #1e1e1e;
            }

            /* Menyesuaikan warna tombol pada formulir pencarian */
            .form-inline button {
                background-color: #17a2b8;
                color: #fff;
            }

            /* Menyesuaikan warna tombol pada hover pada formulir pencarian */
            .form-inline button:hover {
                background-color: #138496;
            }

            /* Menyesuaikan warna teks pada kolom "GAMBAR," "JUDUL," "CONTENT," dan "AKSI" */
            th, td {
                color: #fff;
            }
        </style>
    </head>
<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pkl.update', $pkl->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="id_siswa">Siswa:</label>
                                <select name="id_siswa" id="id_siswa" class="form-control">
                                    @foreach ($siswas as $siswa)
                                        <option value="{{ $siswa->id }}" {{ $siswa->id == $pkl->id_siswa ? 'selected' : '' }}>
                                            {{ $siswa->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_dudi">Nama Dudi:</label>
                                <select name="id_dudi" id="id_dudi" class="form-control">
                                    @foreach ($dudis as $dudi)
                                        <option value="{{ $dudi->id }}" {{ $dudi->id == $pkl->id_dudi ? 'selected' : '' }}>
                                            {{ $dudi->alamat }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tgl_masuk">Tanggal Masuk:</label>
                                <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control" value="{{ $pkl->tgl_masuk }}">
                            </div>
                            <div class="form-group">
                                <label for="tgl_keluar">Tanggal Keluar:</label>
                                <input type="date" name="tgl_keluar" id="tgl_keluar" class="form-control" value="{{ $pkl->tgl_keluar }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'content' );
        </script>
        </body>
    </html>
@endsection
