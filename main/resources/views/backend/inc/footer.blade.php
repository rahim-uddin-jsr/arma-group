<div class="footer">
    <p>Copyright©
        <script>
            document.write(new Date().getFullYear())
        </script> All Rights Reserved By <span class="text-primary">Digiboard</span>
    </p>
</div>
<script src="{{ asset('assets/backend/assets/vendor/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/backend/assets/vendor/js/jquery.overlayScrollbars.min.js') }}"></script>
@stack('script')
<script src="{{ asset('assets/backend/assets/vendor/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/backend/assets/js/main.js') }}"></script>

<!-- for demo purpose -->
<script>
    var rtlReady = $('html').attr('dir', 'ltr');
    if (rtlReady !== undefined) {
        localStorage.setItem('layoutDirection', 'ltr');
    }
</script>
<!-- for demo purpose -->
