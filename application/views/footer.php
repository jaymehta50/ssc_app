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
            ajaxdocthing.send(params);
        }

        function saveNote(a) {
            
                document.getElementById("newnote"+a).blur();
                var url = "start/addnote";
                var params = "id="+a+"&newnote="+encodeURIComponent(document.getElementById("newnote"+a).value);

                loadXMLDoc(url,params,function(){
                    if (ajaxdocthing.readyState==4 && ajaxdocthing.status==200)
                    {
                        var newid = ajaxdocthing.responseText;
                        var ul = document.getElementById("list_my_notes_"+a);
                        var newhtml = "<li id='cond_mynote_"+newid+"'><div class='my_note'><p class='text' id='cond_note_text_"+newid+"'>"+document.getElementById("newnote"+a).value.replace(/\r?\n/g, '<br />')+"</p><br /><a href='#' class='button small' data-label='Edit' data-icon='pencil' onclick='editNote("+newid+")'><span class='icon pencil'></span><abbr>Edit</abbr></a><a href='#' class='button cancel on-right small' data-label='Delete' data-icon='remove' onclick='removeNote("+newid+")'><span class='icon remove'></span><abbr>Delete</abbr></a></div></li>";
                        ul.innerHTML = ul.innerHTML + newhtml;
                        document.getElementById("no_notes_here_"+a).style.display="none";

                        document.getElementById("mynotes_li_nonotes").style.display="none";
                        var ul2 = document.getElementById("mynotes_ul");
                        var newhtml2 = "<li id='me_mynote_"+newid+"'><div class='my_note'><p class='text' id='my_note_"+newid+"'>"+document.getElementById("newnote"+a).value.replace(/\r?\n/g, '<br />')+"</p><br /><a href='#' class='button small' data-label='Edit' data-icon='pencil' onclick='editNote("+newid+")'><span class='icon pencil'></span><abbr>Edit</abbr></a><a href='#' class='button cancel on-right small' data-label='Delete' data-icon='remove' onclick='removeNote("+newid+")'><span class='icon remove'></span><abbr>Delete</abbr></a></div></li>";
                        ul2.innerHTML = ul2.innerHTML + newhtml2;
                        Lungo.Router.article("condition_"+a, "cond_my_notes_"+a);
                    }
                });
            

        }

        function editNote(a) {
            document.getElementById("edit_note_textarea").value = document.getElementById("my_note_"+a).innerHTML.replace(/<br\s*\/?>/mg,"\r\n");
            document.getElementById("edit_note_id").value = a;
            Lungo.Router.article("edit_note", "edit_note");
        }

        function saveEditNote() {
            document.getElementById("edit_note_textarea").blur();
            var url = "start/editnote";
            var a = document.getElementById("edit_note_id").value;
            var params = "id="+a+"&note="+encodeURIComponent(document.getElementById("edit_note_textarea").value);
            loadXMLDoc(url,params,function(){
                if (ajaxdocthing.readyState==4 && ajaxdocthing.status==200)
                {
                    //Nothing
                }
            });

            if (document.contains(document.getElementById("cond_note_text_"+a))) {
                document.getElementById("cond_note_text_"+a).innerHTML = document.getElementById("edit_note_textarea").value.replace(/\r?\n/g, '<br />');
            }
            document.getElementById("my_note_"+a).innerHTML = document.getElementById("edit_note_textarea").value.replace(/\r?\n/g, '<br />');

            document.getElementById("edit_note_textarea").value = "";
            document.getElementById("edit_note_id").value = "";
            Lungo.Router.back();
        }

        function removeNote(b) {
            var r=confirm("Are you sure that you want to delete this note?");
            if (r==true) {
                var url = "start/removenote";
                var params = "id="+b;

                loadXMLDoc(url,params,function(){
                    if (ajaxdocthing.readyState==4 && ajaxdocthing.status==200)
                    {
                        //alert(ajaxdocthing.responseText);
                    }
                });
                
                var elem = document.getElementById('me_mynote_'+b);
                elem.parentNode.removeChild(elem);

                if (document.contains(document.getElementById('cond_mynote_'+b))) {
                    elem = document.getElementById('cond_mynote_'+b);
                    elem.parentNode.removeChild(elem);
                }
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