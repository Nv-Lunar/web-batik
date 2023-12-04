<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
    <script>
        // Membuat efek aktif pada navbar
        $(document).ready(function () {
            $('.navbar-nav .nav-link').click(function () {
                $('.navbar-nav .nav-link').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>