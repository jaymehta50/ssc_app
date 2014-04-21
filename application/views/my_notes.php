<section id="my_notes" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a>
            </nav>
            My Notes
        </header>

        <article id="my_notes" class="list scroll intendeds active">
            <ul>
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
                            echo "<a href='#' data-view-section='adult_condition_".$note['condition_id']." data-async='start/adult_condition/".$note['condition_id']."''><li class='selectable arrow'><strong>".$condition_names[$note['condition_id']]."</strong></li></a>";
                            $first = FALSE;
                        }
                        elseif($prev_id<>$note['condition_id'])
                        {
                            echo "<li class='anchor contrast'></li>
                            <a href='#' data-view-section='adult_condition_".$note['condition_id']." data-async='start/adult_condition/".$note['condition_id']."''><li class='selectable arrow'><strong>".$condition_names[$note['condition_id']]."</strong></li></a>";
                        }
                        echo "<li>".html_entity_decode($note['note'])."</li>";
                        $prev_id = $note['condition_id'];
                    }
                }
            ?>
            </ul>
        </article>

    </section>