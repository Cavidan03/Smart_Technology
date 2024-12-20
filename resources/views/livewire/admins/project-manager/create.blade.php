<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} - Proyekt Əlavə Et</h3>
            </div>

            <!-- Başarılı Mesaj -->
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <!-- Form -->
            <div class="card shadow-sm mt-4">
                <div class="card-header bg-dark text-white text-center">
                    <h5 class="mb-0">{{ __('Proyekt Əlavə Et') }}</h5>
                </div>
                <div class="card-body">
                    <div class="text-info mb-3" wire:loading>Yüklənir...</div>

                    <form wire:submit.prevent="add_project" class="needs-validation" novalidate>
                        <!-- Proyekt Adı -->
                        <div class="form-group">
                            <label for="Name">Proyektin Adı</label>
                            <input type="text" id="Name" name="Name" wire:model.lazy="name" 
                                   placeholder="Proyektin adını daxil edin" class="form-control" />
                            @error('name')
                                <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Şəkil Yükle -->
                        <div class="form-group">
                            <label for="Description">Şəkil</label>
                            <input type="file" id="Description" name="Description" wire:model.lazy="description" 
                                   class="form-control-file" data-toggle="tooltip" title="Fotoşəkil 0x0 ölçüsündə olmalıdır." />
                            <small class="form-text text-muted">Fotoşəkil 0x0 ölçüsündə olmalıdır.</small>
                            @error('description')
                                <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Link üçün Şəkil -->
                        <div class="form-group">
                            <label for="Link">Link üçün Şəkil</label>
                            <input type="file" id="Link" name="Link" wire:model.lazy="link" 
                                   class="form-control-file" data-toggle="tooltip" title="Fotoşəkil 0x0 ölçüsündə olmalıdır." />
                            <small class="form-text text-muted">Fotoşəkil 0x0 ölçüsündə olmalıdır.</small>
                            @error('link')
                                <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary px-4">Proyekt Yadda Saxla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tooltip Script -->
<script>
    $(document).ready(function () {
        // Tooltip başlangıcı
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
