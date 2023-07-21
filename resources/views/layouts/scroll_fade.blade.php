<script>
    $(document).ready(function() {
        // Function to check if the element is in the viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to handle the fade-in animation
        function handleScrollAnimation() {
            $('.fade-in-section').each(function() {
                if (isElementInViewport(this)) {
                    $(this).addClass('fade-in');
                }
            });
        }

        // Check on page load
        handleScrollAnimation();

        // Check on scroll
        $(window).scroll(function() {
            handleScrollAnimation();
        });
    });
</script>