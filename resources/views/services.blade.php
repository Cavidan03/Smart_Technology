@extends('layouts.app')
@php
        $projects = \App\Models\Project::select('name', 'description', 'link')->get();
    
@endphp

@section('content')
    <div id="service" class="services wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col">
                    <center>
                        <h1>Xidmətlərimiz</h1>
                        <hr>
                    </center>
                </div>
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
    </div>
@endsection
