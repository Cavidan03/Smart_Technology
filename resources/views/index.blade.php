@extends('layouts.app')
@section('content')
    @php
        $settings = \App\Models\Settings::pluck('value', 'key')->toArray();
        $projects = \App\Models\Project::select('name', 'description', 'link')->get();

    @endphp
    <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4"
        style="background-image:url('images/bg_slider.jpg');" {{ $app = App\Models\settings::latest()->first() }}>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-contant">
                        <h2>
                            <span class="center"><span class="icon"><img
                                        src="{{ config('app.url') . 'storage/uploads/' . $settings['icon'] }}"
                                        alt="#" /></span></span>
                            <a href="" class="typewrite" data-period="2000"
                                data-type='[ "Səhifəyə Xoş Gəlmişsiniz!", "Bizə Müraciət Edə bilərsiniz", "Biz Bu İşin Peşəkarıyıq!" ]'>
                                <span class="wrap"></span>
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section -->
    <div id="time-table" class="time-table-section">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-time one" style="background:#2895f1;">
                        <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                        <h3>Emergency Case</h3>
                        <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas
                            mole.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-time middle" style="background:#0071d1;">
                        <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <h3>İş Saatları</h3>
                        <div class="time-table-section">
                            <ul>
                                <li><span class="left">Bazer ertəsi - Cümə</span><span class="right">08.00 – 18.00</span>
                                </li>
                                <li><span class="left">Şənbə</span><span class="right">08.00 – 13.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-time three" style="background:#0060b1;">
                        <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                        <h3>Clinic Timetable</h3>
                        <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas
                            mole.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="section wow fadeIn">
        <div class="container">
            <div class="heading">
                <span class="icon-logo"><img src="images/smart-city.png" alt="#"></span>
                <h2>{{ env('APP_NAME') }}</h2>
            </div>
            <!-- end title -->
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Biz Nə Edirik?</h4>
                        <h2>Texniki Servis</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim,
                            non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
                            bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. </p>
                        <a href="/about" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Ətraflı
                            Öyrən</a>
                    </div>
                    <!-- end messagebox -->
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img style="height: 410px" src="images/patch_panel.png" alt="" class="img-responsive">
                        <a href="https://youtu.be/8OUk7glTIUA?si=5XphXsmRBAGW2hw9" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="hr1">
            <div class="row">

                @foreach ($projects as $project)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-widget">
                            <div class="post-media wow fadeIn">
                                <a href="{{ asset('storage/uploads/' . $project->description) }}" data-rel="prettyPhoto[gal]"
                                    class="hoverbutton global-radius">
                                    <i class="flaticon-unlink"></i>
                                </a>
                                <img src="{{ asset( 'storage/uploads/' . $project->link) }}" alt="{{ $project->link }}" class="img-responsive">
                            </div>
                            <h3>{{ $project->name }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <div id="service" class="services wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="inner-services">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/cable-reel.png" alt="#" /></span>
                                <h4>Kabelçəkmə İşləri</h4>
                                <p>Şəbəkə kabellərinin çəkilməsi və səliqəli şəkildə montaj edilməsi.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/wire.png" alt="#" /></span>
                                <h4>Patch Panel Quraşdırılması </h4>
                                <p>Şəbəkə bağlantılarının düzgün idarə olunması üçün patch panellərin qurulması.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/switch.png" alt="#" /></span>
                                <h4>Router və Switch Quraşdırılması</h4>
                                <p>Şəbəkə qurğularının quraşdırılması və konfiqurasiyası.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/camera.png" alt="#" /></span>
                                <h4>IP Kamera Quraşdırılması</h4>
                                <p>Təhlükəsizlik kameralarının quraşdırılması və lokal şəbəkəyə inteqrasiyası.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/dvr.png" alt="#" /></span>
                                <h4>DVR Quraşdırılması</h4>
                                <p>DVR/NVR (rəqəmsal videoyazı sistemləri) quraşdırılması.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/smoke-detector.png" alt="#" /></span>
                                <h4>Yanğın detektorlarının quraşdırılması</h4>
                                <p>Duman, istilik və ya alov detektorlarının yerləşdirilməsi və quraşdırılması.</p>
                            </div>
                        </div>
                    </div>
                </div>
                @livewire('appointmentform')
            </div>
        </div>
    </div>
    @livewire('contactus')
@endsection
