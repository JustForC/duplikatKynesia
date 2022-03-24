<div>
    <div class="content-body">
        <section id="content-types">
            <div class="row match-height">
                <div class="col-xl">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="alert alert-success alert-dismissible fade hidden" role="alert" id="alertSuccess">
                                    <h4 class="alert-heading">Success</h4>
                                    <p class="mb-0">
                                        Data berhasil disimpan.
                                    </p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <input type="hidden" wire:model="downloadableId">
                                <input type="hidden" wire:model="identityPath">
                                <input type="hidden" wire:model="graduationPath">
                                <input type="hidden" wire:model="universityPath">
                                <input type="hidden" wire:model="motivationPath">
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Dokumen Pelengkap</h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="identity">KTP/ Paspor/ KK</label>
                                            <div class="custom-file">
                                                <input wire:model="identity" type="file" class="custom-file-input" id="identity">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                @error('identity') <h6 class="danger">{{ $message }}</h6> @enderror
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="graduation">Surat Keterangan Lulus/Ijazah</label>
                                            <div class="custom-file">
                                                <input wire:model="graduation" type="file" class="custom-file-input" id="graduation">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                @error('graduation') <h6 class="danger">{{ $message }}</h6> @enderror
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="university">Bukti Diterima Di Perguruan Tinggi</label>
                                            <div class="custom-file">
                                                <input wire:model="university" type="file" class="custom-file-input" id="university">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                @error('university') <h6 class="danger">{{ $message }}</h6> @enderror
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="motivation">Motivation Letter</label>
                                            <div class="custom-file">
                                                <input wire:model="motivation" type="file" class="custom-file-input" id="motivation">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                @error('motivation') <h6 class="danger">{{ $message }}</h6> @enderror
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <button wire:click="checkPreviousForm()" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
