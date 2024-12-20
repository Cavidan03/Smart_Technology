<div>
    <div class="content">
        <div class="container">
            <div class="row page-title row">
                <div class="col">
                    <h3 class="text-info">{{ env('APP_NAME') }} İstəylər</h3>
                </div>
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
                        {{ __('Bütün İstəylər') }}</div>
                    <table width="100%" class="table table-hover" id="">
                        <thead>
                            <tr>
                                <th>Ad</th>
                                <th>E-mail</th>
                                <th>Əlaqə Nömrə</th>
                                <th>Ünvan</th>
                                <th>İstəylər</th>
                                <th>Fəaliyyətlər</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($appointments as $request)
                                <tr>
                                    <td>{{ $request->name }}</td>
                                    <td>{{ $request->email }}</td>
                                    <td>{{ $request->phone }}</td>
                                    <td>{{ $request->address }}</td>
                                    <td>{{ $request->message }}</td>
                                    <td class="text-right">

                                        @if (
                                            !App\Models\patient::where([
                                                'name' => $request->name,
                                                'email' => $request->email,
                                                'phone' => $request->phone,
                                                'address' => $request->address,
                                            ])->exists())
                                        @endif

                                        <button onclick="if(confirm('Silməyə Əminsinizmi?')) { @this.call('delete', {{ $request->id }}) }"
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
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $appointments->links() }}
                </div>
            </div>
        </div>
