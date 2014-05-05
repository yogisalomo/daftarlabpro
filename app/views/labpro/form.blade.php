@extends ('labpro.master')

@section ('content')    
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="carousel slide" id="carousel-321470">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-321470">
					</li>
					<li data-slide-to="1" data-target="#carousel-321470">
					</li>
					<li data-slide-to="2" data-target="#carousel-321470">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="{{asset('assets/images/2.jpg')}}">
					</div>
					<div class="item">
						<img alt="" src="{{asset('assets/images/1.jpg')}}">
					</div>
					<div class="item">
						<img alt="" src="{{asset('assets/images/3.png')}}">
					</div>
					<div class="item">
						<img alt="" src="{{asset('assets/images/labpro4.jpg')}}">
					</div>
				</div> <a class="left carousel-control" href="#carousel-321470" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-321470" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>

	<div class="row clearfix">
		<div class="col-sm-12 column">
			<h1>Are You The Next Disney Character?</h1>
			<h2>Petunjuk Pengisian</h2>
			<ol>
				<li>Apabila ada jawaban lebih dari 1 pada bagian BAHASA PEMROGRAMAN dan ORGANISASI, pisahkan dengan titik koma.
				<li>Untuk pertanyaan yang bersifat pilihan, pilih satu jawaban yang paling sesuai
				<li>Seluruh Field wajib diisi, terkecuali Kasus Akademik bila tidak ada.
				<li>Apabila ada petunjuk yang kurang jelas, silahkan membuat asumsi sendiri.
				<li>Isilah kuesioner ini dengan jujur dan penuh tanggung jawab.
			</ol>
		</div>
	</div>

<br>

{{Form::model($pendaftar, array('class'=>'form-horizontal'))}}
	<div class="row clearfix">
		<div class="col-sm-12 column">
			<h2>Bagian I. Data Pribadi</h2>
			<!-- nama_lengkap -->
			<div class="form-group @if ($errors->has('nama_lengkap')) has-error @endif">
				{{ Form::label('nama_lengkap', 'Nama Lengkap', array('class' => 'col-sm-2 control-label')) }}
				<div class="col-sm-4">
					{{ Form::text('nama_lengkap', null, array('class' => 'form-control', 'placeholder' => 'Sesuai identitas resmi seperti KTP, SIM atau KTM')) }}
					<span class="help-block">{{ $errors->first('nama_lengkap') }}</span>
				</div>
			</div>


			<!-- NIM -->
			<div class="form-group @if ($errors->has('nim')) has-error @endif">
				{{ Form::label('nim', 'NIM', array('class' => 'col-sm-2 control-label')) }}
				<div class="col-sm-4">
					{{ Form::text('nim', null, array('class' => 'form-control')) }}
					<span class="help-block">{{ $errors->first('nim') }}</span>
				</div>
			</div>

                        <!-- email -->
                        <div class="form-group @if ($errors->has('email')) has-error @endif">
                                {{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
                                <div class="col-sm-4">
                                        {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email aktif')) }}
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                </div>
                        </div>


			<!-- kota_lahir -->
			<div class="form-group @if ($errors->has('kota_lahir')) has-error @endif">
				{{ Form::label('kota_lahir', 'Tempat Lahir', array('class' => 'col-sm-2 control-label')) }}
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-4">
							{{ Form::text('kota_lahir', null, array('class' => 'form-control col-sm-3', 'placeholder' => 'Kota')) }}
						</div>

						<div class="col-sm-4">
							{{ Form::text('provinsi_lahir', null, array('class' => 'form-control col-sm-3', 'placeholder' => 'Provinsi/Negara Bagian')) }}
						</div>

						<div class="col-sm-4">
							{{ Form::text('negara_lahir', null, array('class' => 'form-control col-sm-4', 'placeholder' => 'Negara')) }}
						</div>
					</div>
					<span class="help-block">{{ $errors->first('kota_lahir') }}</span>
					<span class="help-block">{{ $errors->first('provinsi_lahir') }}</span>
					<span class="help-block">{{ $errors->first('negara_lahir') }}</span>
				</div>
			</div>

			<!-- tanggal_lahir -->
			<div class="form-group @if ($errors->has('tanggallahir')) has-error @endif">
				<label class="col-sm-2 control-label" for="tanggal_lahir">Tanggal Lahir</label>
				<div class="col-sm-4">
 					<input name= "tanggallahir" class="form-control" type="text" id="tanggal_lahir" placeholder="MM/DD/YYYY" />
					<span class="help-block">{{ $errors->first('tanggallahir') }}</span>
				</div>
			</div>
			
			<!-- nomor_hp -->
			<div class="form-group @if ($errors->has('nomor_hp')) has-error @endif">
				{{ Form::label('nomor_hp', 'Nomor HP', array('class' => 'col-sm-2 control-label')) }}
				<div class="col-sm-4">
					{{ Form::text('nomor_hp', null, array('class' => 'form-control', 'placeholder' => 'eg: +6287812341234')) }}
					<span class="help-block">{{ $errors->first('nomor_hp') }}</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-sm-12 column">
			<h2>Bagian II. Data Nilai Kuliah Terkait Programming</h2>
			<table class="table">
				<th>
					No
					<th>Kode</th>
					<th>Mata Kuliah</th>
					<th>Indeks Nilai</th>
				</th>
				<tr>
					<td>1</td>
					<td>KU1071</td>
					<td>Pengantar Teknologi Informasi A</td>
					<td>{{Form::select('nilai_pti', array('A' => 'A','AB'=>'AB', 'B' =>'B', 'BC'=>'BC', 'C' => 'C', 'D' => 'D', 'E'=> 'E'), 'A', $attributes = array('class' => 'form-control'))}}</td>
				</tr>
				<tr>
					<td>2</td>
					<td>IF2030</td>
					<td>Algoritma Struktur Data</td>
					<td>{{Form::select('nilai_alstrukdat', array('A' => 'A','AB'=>'AB', 'B' =>'B', 'BC'=>'BC', 'C' => 'C', 'D' => 'D', 'E'=> 'E'), 'A', $attributes = array('class' => 'form-control'))}}</td>
				</tr>
				<tr>
					<td>3</td>
					<td>IF2210</td>
					<td>Pemrograman Berorientasi Objek*</td>
					<td>{{Form::select('nilai_oop', array('A' => 'A','AB'=>'AB', 'B' =>'B', 'BC'=>'BC', 'C' => 'C', 'D' => 'D', 'E'=> 'E'), 'A', $attributes = array('class' => 'form-control'))}}</td>
				</tr>
			</table>
			<p class="text-muted">* Prediksi</p>
		</div>
	</div>

	<div class="row clearfix">
		<div class="col-md-12 column form-vertical">
			<h2>Bagian III. Lain-Lain</h2>
			<ol>
				<li>Apakah Anda pernah/sedang/berpotensi memiliki kasus akademik?
					<div class="form-group @if ($errors->has('apa_kasus')) has-error @endif">
						<div class="col-sm-12">
							<label class="radio-inline">
							  <input type="radio" id="apa_kasus" name="apa_kasus" value="1">Ya
							</label>
							<label class="radio-inline">
							  <input type="radio" id="apa_kasus" name="apa_kasus" value="2">Tidak
							</label>
							<span class="help-block">{{ $errors->first('apa_kasus') }}</span>
						</div>
					</div>
				</li>
				<li>Jika ya, jelaskan dengan singkat kasus akademik yang pernah/sedang/mungkin akan Anda alami:
					<div class="form-group @if ($errors->has('penjelasan_kasus')) has-error @endif">
						<div class="col-sm-12">
							{{Form::textarea('penjelasan_kasus', null, array('class' => 'form-control'))}}
							<span class="help-block">{{ $errors->first('penjelasan_kasus') }}</span>
						</div>
					</div>
				</li>
				<li>Sebutkan seluruh bahasa pemrograman dan/atau framework yang pernah anda gunakan, dan berikan skor dalam skala 1-5 untuk masing-masing bahasa / framework (1 : sekilas saja, 5 : expert) dengan Format [Bahasa/Framework](Spasi)-(Spasi)[Skor].
					<div class="form-group @if ($errors->has('skill_programming')) has-error @endif">
						<div class="col-sm-12">
							{{Form::textarea('skill_programming', null, array('class' => 'form-control', 'placeholder' => 'eg: Pascal - 4; C - 5; C++ 5; Java - 5; PHP - 4; Laravel - 4'))}}
							<span class="help-block">{{ $errors->first('skill_programming') }}</span>
						</div>
					</div>
				</li>
				<li>Sebutkan kegiatan non-akademik/Organisasi yang sedang Anda ikuti dengan Format [Organisasi](Spasi)-(Spasi)[Jabatan]
					<div class="form-group @if ($errors->has('organisasi')) has-error @endif">
						<div class="col-sm-12">
							{{Form::textarea('organisasi', null, array('class' => 'form-control', 'placeholder' => 'eg: HMIF - Ketua, ARC - Anggota Divisi Networking'))}}
							<span class="help-block">{{ $errors->first('organisasi') }}</span>
						</div>
					</div>
				</li>
			</ol>
		</div>
	</div>
	<div class="row clearfix" style="vertical-align: middle">
		<div class="container">
			<h2>Bagian IV. Tentang Laboratorium Programming</h2>
		</div>

		<div class="container">
			<h4>Apa yang Anda ketahui mengenai Beliau?</h4>

			<div class="col-sm-3" style="text-align: center; padding: 12px">
				<a href="{{asset('assets/images/big/dosen.jpg')}}" target="_blank">
					<img src="{{asset('assets/images/dosen.jpg')}}" alt="Dosen" class="img-circle">
				</a>
			</div>

			<div class="col-sm-9">
				<div class="form-group @if ($errors->has('tentang_dosen')) has-error @endif">
					<div class="col-sm-12">
						{{Form::textarea('tentang_dosen', null, array('class' => 'form-control'))}}
						<span class="help-block">{{ $errors->first('tentang_dosen') }}</span>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<h4>Apakah Anda mengenali para Asisten? Kira-kira, barang siapakah ini?</h4>
			@for ($i = 1; $i <= 13; $i++)
			<div class="col-sm-3" style="text-align: center">
				<a href="{{asset('assets/images/big/gambar_' . $i . '.jpg')}}" target="_blank">
					<img src="{{asset('assets/images/gambar_' . $i . '.jpg')}}" class="img-rounded">
				</a>
				<div class="@if ($errors->has('punya_barang_' . $i)) has-error @endif" style="padding-top: 12px">
					{{ Form::text('punya_barang_' . $i, null, array('class' => 'form-control')) }}
					<span class="help-block">{{ $errors->first('punya_barang_' . $i) }}</span>
				</div>
			</div>
			@endfor
		</div>
	</div>
	<div class="row clearfix" style="margin-top:1%;">
		<div class="col-md-12 column">
			{{Form::submit('Submit!', array('class'=>'btn btn-success btn-lg btn-block active'))}}
		</div>
	</div>
{{Form::close()}}
@stop

@section ('script') 
	<script>
    $(function() {
        $( "#tanggal_lahir" ).datepicker();
    });
    </script>
@stop
