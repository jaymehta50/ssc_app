<!-- Lungo dependencies -->
    <script src="<?=$base_url;?>assets/lungo/quo.js"></script>
    <script src="<?=$base_url;?>assets/lungo/lungo.js"></script>
    <!-- LungoJS - Sandbox App -->
    <script>
        Lungo.init({
            name: 'Kitchen Sink',
            version: '2.1.0222',
            resources: ['assets/menu.html'],
            history: false
        });

        // Registering the swipe
        $$('article').swipeLeft(function(e) {
            // hide the menu
            Lungo.View.Aside.hide("#menu");
            return false;
        }).swipeRight(function(e) {
             // show the menu
            Lungo.View.Aside.show("#menu")
            return false;
        });
    </script>
</body>
</html>