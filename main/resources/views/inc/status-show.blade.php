<div class="card-body">
    <!--       //status notification code start       -->
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    <script>
        // Automatically close the alert after 5 seconds
        setTimeout(function () {
            $('.alert').slideUp(500);
        }, 2000);
    </script>
    <style>
        .alert {
            / Add some padding to make the text look better /
            padding: 12px;
            / Add transitions to animate height changes /
            transition: height 0.20s ease;

            overflow: hidden;
            / Hide overflow to prevent abrupt closing /
        }
    </style>
    @endif
<!--       //status notification code end       -->
