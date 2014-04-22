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
        Lungo.Service.Settings.async = true;

        var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        document.cookie = "devwidth="+width+"; path=/;";

        var ajaxdocthing;
        function loadXMLDoc(url,params,cfunc)
        {
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                ajaxdocthing=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                ajaxdocthing=new ActiveXObject("Microsoft.XMLHTTP");
            }
            ajaxdocthing.onreadystatechange=cfunc;
            ajaxdocthing.open("POST",url,true);
            ajaxdocthing.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajaxdocthing.setRequestHeader("Content-length", params.length);
            ajaxdocthing.setRequestHeader("Connection", "close");
            ajaxdocthing.send(params);
        }

        function saveNote(a) {
            document.getElementById("newnote").blur();
            var url = "start/addnote";
            var params = "id="+a+"&newnote="+encodeURIComponent(document.getElementById("newnote").value);

            loadXMLDoc(url,params,function(){
                if (ajaxdocthing.readyState==4 && ajaxdocthing.status==200)
                {
                    //alert(ajaxdocthing.responseText);
                }
            });

            var div=document.createElement("DIV");
            div.className = "my_note";
            div.innerHTML = "<p>" + document.getElementById("newnote").value.replace(/\r?\n/g, '<br />') + "</p>";
            var list=document.createElement("LI");
            list.appendChild(div);
            document.getElementById("list_my_notes_"+a).appendChild(list);
            document.getElementById("no_notes_here_"+a).style.display="none";

            document.getElementById("newnote").value = "";
            Lungo.Router.article("adult_condition_"+a, "my_notes");
        }

        function removeNote(b) {
            var r=confirm("Are you sure that you want to delete this note?");
            if (r==true) {
                var url = "start/removenote";
                var params = "id="+b;

                loadXMLDoc(url,params,function(){
                    if (ajaxdocthing.readyState==4 && ajaxdocthing.status==200)
                    {
                        alert(ajaxdocthing.responseText);
                    }
                });

                var elem = document.getElementById('cond_mynote_'+b);
                elem.parentNode.removeChild(elem);
            }
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