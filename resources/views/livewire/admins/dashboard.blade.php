<div class="container mt-4">
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-plus"></i> Abunə Sayı</h5>
                    <p class="card-text">{{ $subscribers }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-calendar-plus"></i> Gələn İstəylər</h5>
                    <p class="card-text">{{ $requestedAppointment }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-envelope"></i> Gələn Mesajlar</h5>
                    <p class="card-text">{{ $messagesCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-file-alt"></i>Proyektlər</h5>
                    <p class="card-text">{{ $projectscount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
