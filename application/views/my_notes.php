<section id="my_notes" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a>
            </nav>
            My Notes
        </header>

        <article id="my_notes" class="list scroll intended active">
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
                            echo "<li><div class='intendeds'><ul><li><strong>".$condition_names[$note['condition_id']]."</strong></li>";
                            $first = FALSE;
                        }
                        elseif($prev_id<>$note['condition_id'])
                        {
                            echo "</ul></div></li>
                            <li><div class='intendeds'><ul><li><strong>".$condition_names[$note['condition_id']]."</strong></li>";
                        }
                        echo "<li>".html_entity_decode($note['note'])."</li>";
                        $prev_id = $note['condition_id'];
                    }
                }


            ?>
            </ul></div></li></ul>
        </article>

    </section>