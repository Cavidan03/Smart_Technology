<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Abunəçilər</h3>
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
                    <br>
                    <hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __('Abunəçilər') }}</div>
                    <table class="table table-hover" style="" id="">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Vaxt</th>
                                <th class="text-center">Fəaliyyətlər</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscribers as $subscriber)
                                <tr>
                                    <td class="text-center">{{ $subscriber->id }}</td>
                                    <td class="text-center">{{ $subscriber->email }}</td>
                                    <td class="text-center">{{ $subscriber->created_at }}</td>
                                    <td class="text-center">
                                        <button onclick="if(confirm('Silməyə Əminsinizmi?')) { @this.call('delete', {{ $subscriber->id }}) }"
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
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $subscribers->links() }}
                </div>
            </div>
        </div>
