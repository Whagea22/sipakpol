<x-module.admin>
        <x-template.button.back-button url="admin/master-data/format-surat" />
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Tambah Format Surat
                </div>
            </div>
            <div class="card-body">
                <form action="{{url('admin/master-data/format-surat')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">File PDF</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" accept="application/pdf,application/vnd.ms-excel">
                                        <label class="custom-file-label" for="">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">File</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file_word" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
                                        <label class="custom-file-label" for="">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary float-right">SIMPAN</button>
                </form>
            </div>
        </div>
</x-module.admin>

