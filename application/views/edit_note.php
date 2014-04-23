<section id="edit_note" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a>
            </nav>
            Edit a Note
        </header>

        <article id="edit_note" class="list indented scroll active">
            <ul>
                <li>
                    <div style="text-align:center;margin:9px 0 10px 0;"><strong class='text bold'>Edit This Note</strong></div>
                    <p>Make any changes to your note below, and then press Save.</p><br />
                    <p>To leave without saving the changes to your note, press Cancel.</p><br />
                </li>
                <li>
                    <h2>Edit Note</h2>
                    <div class="form">
                        <fieldset>
                            <textarea id="edit_note_textarea"></textarea>
                            <input type="hidden" id="edit_note_id" name="edit_note_id" value="" />                                
                        </fieldset>
                    </div>
                    <a href='#back' class='button small' data-label='Cancel' data-icon='chevron-left' data-view-section="back"></a>
                    <a href='#' class='button accept on-right small' data-label='Save Changes' data-icon='check' onclick='saveEditNote()'></a></div>
                </li>
            </ul>
        </article>


    </section>