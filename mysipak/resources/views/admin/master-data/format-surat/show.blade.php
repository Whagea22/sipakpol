<x-module.admin>
        <a href="{{url('admin/master-data/format-surat')}}" class="btn btn-xs btn-primary float-lift"><i class="bi bi-arrow-left-short"></i> Kembali </a>
          <div class="card">
            <div class="card-header">
                <div class="card-title">
                  Format Surat
                </div>
            </div>
            <div class="card-body">
                {{ $format->nama }}
                <hr> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Format PDF</label>
                            <embed style="width: 100%; height: 450px" src="{{ url("public/$format->file") }}" type="application/pdf">
                        </div>
                    </div>
                </div>  
            </div>
          </div>
</x-module.admin>