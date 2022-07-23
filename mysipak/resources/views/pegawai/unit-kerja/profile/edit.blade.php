<x-module.pegawai-unitkerja>

	<x-template.button.back-button url="pegawai/unit-kerja/profile" />
	<div class="card">
		<div class="card-header">
			<div class="card-title">
				Edit Profile
			</div>
		</div>
		<div class="card-body">
			<form action="{{ url('pegawai/unit-kerja/profile') }}" method="post" enctype="multipart/form-data">
				@csrf
				@method('put')
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">NIP/NUP</label>
							<input type="text" name="nip" id="" class="form-control" value="{{$Pegawai->nip}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">NAMA</label>
							<input type="text" name="nama" id="" class="form-control" value="{{$Pegawai->nama}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Tempat Lahir</label>
							<input type="text" name="tempatlahir" id="" class="form-control" value="{{$Pegawai->tempatlahir}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Tanggal Lahir</label>
							<input type="date" name="tanggallahir" id="" class="form-control" value="{{$Pegawai->tanggallahir}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Agama</label>
							<select name="agama" class="form-control">
								<option disabled selected>Pilih Agama</option>
								<option value="islam">Islam</option>
								<option value="kristen">kristen</option>
								<option value="katolik">katolik</option>
								<option value="hindu">hindu</option>
								<option value="buddha">buddha</option>
								<option value="konghucu">konghucu</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Jenis Kelamin</label>
							<select name="jenis_kelamin" class="form-control">
								<option disabled selected>Pilih Jenis Kelamin</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Unit Kerja</label>
							<input type="text" name="unitkerja" id="" class="form-control" value="{{$Pegawai->unitkerja}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Jabatan</label>
							<input type="text" name="jabatan" id="" class="form-control" value="{{$Pegawai->jabatan}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Profile</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="profile" accept=".png , .jpg" />
									<label class="custom-file-label" for="">Choose file</label>
								</div>
							</div>      
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Username</label>
							<input type="text" name="username" id="" class="form-control" value="{{$Pegawai->username}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">EMAIL</label>
							<input type="text" name="email" id="" class="form-control" value="{{$Pegawai->email}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">PASSWORD</label>
							<input type="password" name="password" id="" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">                 
					<div class="col-md-12">
						<button class="btn btn-primary float-right">SIMPAN</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</x-module.pegawai-unitkerja>