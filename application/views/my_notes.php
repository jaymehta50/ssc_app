<section id="my_notes" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#" data-view-aside="features" data-icon="menu"></a>
            </nav>
            My Notes
        </header>

        <article id="my_notes" class="list scroll intendeds active">
            <ul><li class='anchor contrast'></li>
            <?php
                if(!$my_notes) echo "<li><h2>You have not created any notes yet!</h2></li>";
                else
                {
                    $prev_id = "";
                    $first = TRUE;
                    foreach($my_notes as $note)
                    {
                        if($first && $prev_id<>$note['condition_id'])
                        {
                            echo "<a href='#' data-view-section='adult_condition_".$note['condition_id']."' data-async='start/adult_condition/".$note['condition_id']."''><li class='selectable arrow'><strong class='text bold'>".$condition_names[$note['condition_id']]."</strong></li></a>";
                            $first = FALSE;
                        }
                        elseif($prev_id<>$note['condition_id'])
                        {
                            echo "<li class='anchor contrast'></li>
                            <a href='#' data-view-section='adult_condition_".$note['condition_id']."' data-async='start/adult_condition/".$note['condition_id']."''><li class='selectable arrow'><strong class='text bold'>".$condition_names[$note['condition_id']]."</strong></li></a>";
                        }
                        echo "<li id='me_mynote_".$note['id']."'><div class='my_note'><p class='text' id='my_note_".$note['id']."'>".html_entity_decode($note['note'])."</p><br />
                                <a href='#' class='button small' data-label='Edit' data-icon='pencil' onclick='editNote(".$note['id'].")'></a>
                                <a href='#' class='button cancel on-right small' data-label='Delete' data-icon='remove' onclick='removeNote(".$note['id'].",2)'></a></div>
                                </li>";
                        $prev_id = $note['condition_id'];
                    }
                }
            ?>
            </ul>
        </article>

    </section>