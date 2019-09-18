@extends('layout/main')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">  
      <h1 class="mt-3">Daftar Konsultasi Pasien</h1>

      <table class="table">
      	<thead class="thead-dark">
      		<tr>
	      		<th scope="col">#</th>
	      		<th scope="col">Nama</th>
	      		<th scope="col">Alamat</th>
	      		<th scope="col">No HP</th>
	      		<th scope="col">Tipe Hewan</th>
	      		<th scope="col">Keluhan</th>
      		</tr>
      	</thead>
      	<tbody>
      		@foreach( $pasien as $pas )
      		<tr>
      			<th scope="row">{{ $loop->iteration }}</th>
      			<th>{{ $pas->Nama }}</th>
      			<th>{{ $pas->Alamat }}</th>
      			<th>{{ $pas->NoHP}}</th>
      			<th>{{ $pas->TipeHewan}}</th>
      			<th>{{ $pas->Keluhan }}</th>
      			<th>
      				<a href="" class="badge badge-success">edit</a>
      				<a href="" class="badge badge-danger">delete</a>
      			</th>
      		</tr>
      		@endforeach
      	</tbody>
      </table>
      </div>
    </div>
  </div>
@endsection