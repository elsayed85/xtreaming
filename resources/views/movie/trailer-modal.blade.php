<div class="modal-content bg-transparent">
    <div class="modal-body">
        @if (!empty($movie->trailer_url))
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $movie->trailer_url }}"
                    allowfullscreen></iframe>
            </div>
        @else
            <div class="alert alert-danger">
                <p class="text-center">No trailer available</p>
            </div>
        @endif
    </div>
</div>
