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

        var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        document.cookie = "devwidth="+width+"; path=/;";

        function saveNote(a) {
            var url = "<?php echo $base_url; ?>start/addnote";
            var data = {id: a, newnote: document.getElementById("newnote").value};
            var parseResponse = function(result) {
                //Do Nothing
            }
            var result = Lungo.Service.post(url, data, parseResponse, "html");

            document.getElementById("my_notes_"+a).innerHTML = result.responseText;
            Lungo.Router.article("adult_condition_"+a, "my_notes");

        }
        

        /*
        function myheaderresize() {
            var span = $('header');
            var fontSize = parseInt(span.css('font-size'));
            var environment = Lungo.Core.environment();

            do {
                fontSize--;
                span.css('font-size', fontSize.toString() + 'px');
            } 
            while (span.width() >= environment.screen.width);
        };

         Registering the swipe
        $$('article').swipeLeft(function(e) {
            // hide the menu
            Lungo.View.Aside.hide("#features");
            return false;
        }).swipeRight(function(e) {
             // show the menu
            Lungo.View.Aside.show("#features")
            return false;
        });
        */
    </script>
</body>
</html>