<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="images/smart-city.png" alt="#"></span>
            <h2>Fikir və Rəylərinizi Bizimlə Bölüşün!</h2>
        </div>
    </div>
    <div class="contact-section">
        <div class="form-contant">
            <form id="ajax-contact" wire:submit.prevent="add_to_contact">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group in_name">
                            <input type="text" class="form-control" placeholder="Ad" wire:model.lazy="name"
                                required="required" style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="email" class="form-control" wire:model.lazy="email" placeholder="İmeyl"
                                required="required " style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="tel" class="form-control" id="phone" wire:model.lazy="phone"
                                placeholder="Telefon" required="required" style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="text" class="form-control" id="subject" wire:model.lazy="subject"
                                placeholder="Mövzu" required="required" style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group in_message">
                            <textarea class="form-control" id="message"  rows="5" placeholder="Mesaj"
                                wire:model.lazy="message" required="required" style="color: cyan"></textarea>
                        </div>
                        <div class="actions">
                            <input type="submit" value="Mesajınızı Göndərin!"  name="submit" id="submitButton" class="btn small"
                                title="Submit Your Message!">
                        </div>
                    </div>
                </div>
            </form>
            @if (session()->has('message'))
                <script>
                    alert(' {{ session('message') }}')

                </script>
            @endif
        </div>
        <div id="googleMap" style="width:100%;height:450px;"></div>
    </div>
</div>
