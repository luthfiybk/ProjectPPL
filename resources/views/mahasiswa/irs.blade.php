@extends('mahasiswa/layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
          <div class="text-start">
              <h3 class="h3">{{ auth()->user()->name }}</h3>
              <p class="p">Mahasiswa</p>
              <p class="p">Fakultas Sains dan Matematika</p>
          </div>
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
                      <div class="mb-3">
                          <label for="semester" class="form-label">Semester Aktif</label>
                          <p type="text" class="form-control border-0" id="semester" name="semester">{{ $irs->semester }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="sks" class="form-label">SKS</label>
                          <p type="number" class="form-control border-0" id="sks" name="sks">{{ $irs->sks }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="file_irs" class="form-label">Scan IRS</label>
                          {{--href to open upload file--}}
                          <a href="storage/irs/{{$irs->file_irs}}" target="_blank" style="text-decoration: none" class="form-control border-0 text-primary">Cek File IRS</a>
                          {{-- <a href="{{asset('/storage/file_irs/'.$irs->file_irs)}}" class="form-control border-0 text-primary" style="text-decoration: none">Cek File IRS</a> --}}
                      </div>
                      <a href="/edit-irs/{{ $irs->id }}" class="btn btn-primary">Change</a>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    