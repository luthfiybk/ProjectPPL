@extends('layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
          <div class="text-start">
              <h3 class="h3">{{ auth()->user()->name }}</h3>
              <p class="p">Operator</p>
              <p class="p">Fakultas Sains dan Matematika</p>
          </div>
          @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar" class="align-text-bottom"></span>
              This week
            </button>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                      {{--make form to edit--}}
                      <form action="/tambah-data-mhs" method="post">
                          @csrf
                          <div class="mb-3">
                              <label for="nama" class="form-label">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama">
                          </div>
                          <div class="mb-3">
                              <label for="nim" class="form-label">NIM</label>
                              <input type="text" class="form-control" id="nim" name="nim">
                          </div>
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="text" class="form-control" id="email" name="email">
                          </div>
                          <div class="mb-3">
                              <label for="angkatan" class="form-label">Angkatan</label>
                              <input type="text" class="form-control" id="angkatan" name="angkatan">
                          </div>
                          <div class="mb-3">
                              <label for="no_hp" class="form-label">No. Telepon</label>
                              <input type="text" class="form-control" id="no_hp" name="no_hp" >
                          </div>
                          <div class="mb-3">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input type="text" class="form-control" id="alamat" name="alamat" >
                          </div>
                          <button type="submit" class="btn btn-primary">Tambah</button>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    