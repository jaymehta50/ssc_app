<section id="my_notes" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#" data-view-aside="features" data-icon="menu"></a>
            </nav>
            My Notes
        </header>

        <article id="my_notes" class="list scroll intendeds active">
            <ul id='mynotes_ul'><li class='anchor contrast'></li>
            <?php
                echo "<li id='mynotes_li_nonotes'";
                if($my_notes) echo " style='display:none;'";
                echo "><h2>You have not created any notes yet!</h2></li>";
                if($my_notes)
                {
                    $prev_id = "";
                    $first = TRUE;
                    foreach($my_notes as $note)
                    {
                        if($first && $prev_id<>$note['condition_id'])
                        {
                            echo "<div id='mynotes_conddiv_".$note['condition_id']."'><a href='#' data-view-section='condition_".$note['condition_id']."' data-async='start/condition/".$note['condition_id']."''><li class='selectable arrow'><strong class='text bold'>".$condition_names[$note['condition_id']]."</strong></li></a>";
                            $first = FALSE;
                        }
                        elseif($prev_id<>$note['condition_id'])
                        {
                            echo "</div><li class='anchor contrast'></li>
                            <div id='mynotes_conddiv_".$note['condition_id']."'><a href='#' data-view-section='condition_".$note['condition_id']."' data-async='start/condition/".$note['condition_id']."''><li class='selectable arrow'><strong class='text bold'>".$condition_names[$note['condition_id']]."</strong></li></a>";
                        }
                        echo "<li id='me_mynote_".$note['id']."'><div class='my_note'><p class='text' id='my_note_".$note['id']."'>".html_entity_decode($note['note'])."</p><br />
                                <a href='#' class='button small' data-label='Edit' data-icon='pencil' onclick='editNote(".$note['id'].")'></a>
                                <a href='#' class='button cancel on-right small' data-label='Delete' data-icon='remove' onclick='removeNote(".$note['id'].")'></a></div>
                                </li>";
                        $prev_id = $note['condition_id'];
                    }
                }
            ?>
            </div></ul>
        </article>

    </section>