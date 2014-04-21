<section id="adult_prob" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#" data-view-aside="features" data-icon="menu"></a>
            </nav>
            Adult Problem List
        </header>

        <article id="adult_prob_1" class="list scroll active">
            <div class="indented"><ul>
                <li><h4>This is the Problem List!</h4></li>
            </ul></div>
            <div class="indenteds"><ul>
                <?php
                    $chunked = array_chunk($adult_probs,(round(count($adult_probs)/3)));
                    $one_first = FALSE;
                    foreach($chunked[0] as $value)
                    {
                        if(!$one_first) $one_first = $value['clinical_problem'][0];
                        $one_last = $value['clinical_problem'][0];
                        echo '<a href="#" data-view-section="adult_prob_'.$value['problem_id_adult'].'" data-async="start/adult_prob/'.$value['problem_id_adult'].'"><li class="selectable arrow"><strong>'.$value['clinical_problem'].'</strong></li></a>';
                    }
                ?>
            </ul></div>
        </article>

        <article id="adult_prob_2" class="list scroll">
            <div class="indented"><ul>
                <li><strong>This is the Problem List!</strong></li>
            </ul></div>
            <div class="indenteds"><ul>
                <?php
                    $two_first = FALSE;
                    foreach($chunked[1] as $value)
                    {
                        if(!$two_first) $two_first = $value['clinical_problem'][0];
                        $two_last = $value['clinical_problem'][0];
                        echo '<a href="#" data-view-section="adult_prob_'.$value['problem_id_adult'].'" data-async="start/adult_prob/'.$value['problem_id_adult'].'"><li class="selectable arrow"><strong>'.$value['clinical_problem'].'</strong></li></a>';
                    }
                ?>
            </ul></div>
        </article>

        <article id="adult_prob_3" class="list scroll">
            <div class="indented"><ul>
                <li><strong>This is the Problem List!</strong></li>
            </ul></div>
            <div class="indenteds"><ul>
                <?php
                    $three_first = FALSE;
                    foreach($chunked[2] as $value)
                    {
                        if(!$three_first) $three_first = $value['clinical_problem'][0];
                        $three_last = $value['clinical_problem'][0];
                        echo '<a href="#" data-view-section="adult_prob_'.$value['problem_id_adult'].'" data-async="start/adult_prob/'.$value['problem_id_adult'].'"><li class="selectable arrow"><strong>'.$value['clinical_problem'].'</strong></li></a>';
                    }
                ?>
            </ul></div>
        </article>

        <footer>
        <nav>
            <a href="#" data-view-article="adult_prob_1" class="active"><?php echo $one_first."-".$one_last;?></a>
            <a href="#" data-view-article="adult_prob_2"><?php echo $two_first."-".$two_last;?></a>
            <a href="#" data-view-article="adult_prob_3"><?php echo $three_first."-".$three_last;?></a>
        </nav>
        </footer>

    </section>