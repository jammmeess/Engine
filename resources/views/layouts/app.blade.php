
<script>
    // Add the 'transparent' class to navbar initially
    document.addEventListener('DOMContentLoaded', function() {
        var navbar = document.querySelector('.navbar');
        navbar.classList.add('transparent');

        // Add or remove the 'scrolled' class based on scroll position
        window.addEventListener('scroll', function() {
            if (window.scrollY > 0) {
                navbar.classList.remove('transparent');
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
                navbar.classList.add('transparent');
            }
        });
    });
</script>