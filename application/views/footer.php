<!-- Lungo dependencies -->
    <script src="<?=$base_url;?>assets/lungo/quo.js"></script>
    <script src="<?=$base_url;?>assets/lungo/lungo.js"></script>
    <!-- LungoJS - Sandbox App -->
    <script>
        Lungo.init({
            name: 'Kitchen Sink',
            version: '2.1.0222',
            history: false
        });

        var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        document.cookie = "devwidth="+width+"; path=/;";

        function saveNote(a) {
            var url = "start/addnote";
            var data = {id: a, newnote: document.getElementById("newnote").value};
            
            Lungo.Service.post(url, data, showResponse(result), "text");

            var div=document.createElement("DIV");
            div.className = "my_note";
            div.innerHTML = "<p>" + document.getElementById("newnote").value.replace(/\r?\n/g, '<br />') + "</p>";
            var list=document.createElement("LI");
            list.appendChild(div);
            document.getElementById("list_my_notes_"+a).appendChild(list);
            document.getElementById("no_notes_here_"+a).style.display="none";

            Lungo.Router.article("adult_condition_"+a, "my_notes");
        }

        function showResponse(result)
        {
            alert(result.responseText);
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