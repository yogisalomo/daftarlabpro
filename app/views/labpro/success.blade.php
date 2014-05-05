@extends ('labpro.master')

@section ('content')    

<div class="container">
	<div class="row clearfix">
		<div class="col-md-8 column">
			<h2>
				Else A telah menunggu kedatanganmu..
			</h2>
			<p>
				Terima Kasih Telah Mendaftar.<br>
				Perjuangan belum usai.<br>
				Tetap semangat, The Next Disney Character!<br>
			</p>
			<a class="btn" href="{{url('daftarlabpro')}}"><button type="button" class="btn btn-primary btn-default btn-block">Daftarkan Temanmu</button></a>
		</div>
		<div class="col-md-4 column">
			<img alt="140x140" src="{{asset('assets/images/elsea.jpg')}}" width="100%" height="auto	">
		</div>
	</div>
</div>




@stop