<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="appointment-form">

        <h3><span>+</span> Qəbul üçün qeydiyyat</h3>
        <div class="form">
            <form wire:submit.prevent="store_requested_appointment()">
                <fieldset>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="form-group">
                                <input type="text" wire:model.lazy="name" name="name" placeholder="Adınız"
                                    class="form-control" />
                                @error('name')
                                    <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="row">
                            <div class="form-group">
                                <input type="email" placeholder="E-Mail" wire:model.lazy="email"
                                    class="form-control" />
                                @error('email')
                                    <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="form-group">
                                <input type="number" wire:model.lazy="phone" placeholder="Əlaqə nömrəniz"
                                    max="10000000000" class="form-control" />
                                @error('phone')
                                    <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="form-group">
                                <input type="text" wire:model.lazy="address" name="address" placeholder="Ünvan"
                                    class="form-control" />
                                @error('address')
                                    <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="form-group">
                                <textarea wire:model.lazy="message" rows="4" id="textarea_message" class="form-control"
                                    placeholder="İstəyiniz"></textarea>
                                @error('message')
                                    <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="form-group">
                                <div class="center"><button type="submit">Göndər</button></div>
                            </div>
                            @if (session()->has('message'))
                                <script>
                                    alert(' {{ session('message') }}')
                                </script>
                            @endif
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
