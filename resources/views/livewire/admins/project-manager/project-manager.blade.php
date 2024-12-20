<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Gördüyümüz İşlər</h3>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" wire:click="show_create_form">Proyekt Əlavə et</button>

            </div>
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <div class="text-info" wire:loading>Yüklənir..</div>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __('Gördüyümüz İşlər') }}</div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Ad</th>
                                <th class="text-center">Yolu</th>
                                <th class="text-center">Link</th>
                                <th class="text-center">Vaxt</th>
                                <th class="text-center">Fəaliyyətlər</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($projects as $project)
                                <tr>
                                    <td class="text-center">{{ $project->id }}</td>
                                    <td class="text-center">{{ $project->name }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/uploads/' . $project->description) }}"
                                            alt="Description Image" style="max-width: 100px;">
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/uploads/' . $project->link) }}" alt="Link Image"
                                            style="max-width: 100px;">
                                    </td>
                                    <td class="text-center">{{ $project->created_at }}</td>
                                    <td class="text-center">
                                        <button onclick="if(confirm('Silməyə Əminsinizmi?')) { @this.call('delete', {{ $project->id }}) }"
                                                class="btn btn-outline-danger btn-rounded">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                    
                                </tr>
                            @empty
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
