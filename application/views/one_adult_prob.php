<section id="adult_prob_<?php echo $one_adult_prob[0]['clinical_problem_id']; ?>" data-transition="slide" data-aside="features" class="drag">
        <header data-back="chevron-left">
            <?php echo $problem_name['clinical_problem']; ?>
            <nav class="on-right">
                <a href="#"><abbr class="text tiny ">v0.1</abbr></a>
            </nav>
        </header>

        <article id="one_adult_prob" class="list scroll active">
            <ul class="intended">
                <li><p>These are the subgroups of problems associated with <span style="font-style:italic;"><?php echo $problem_name['clinical_problem']; ?></span></p>
                <p>Click on one to see the condition(s) associated with it!</p></li>
            </ul>
            <ul class='indenteds'>
                <?php
                    $prev = "";
                    $subgroup_array = array();
                    $i = 0;
                    foreach($one_adult_prob as $value)
                    {
                        if($prev==$value['problem_subgroup']) continue;
                        $i += 1;
                        $subgroup_array[] = array('problem_id' => $value['clinical_problem_id'], 'subprob' => $value['problem_subgroup'], 'subprob_no' => $i);
                        echo '<li class="selectable"><a href="#" data-view-section="adultprob_'.$value['clinical_problem_id'].'_subprob_'.$i.'"><strong>'.$value['problem_subgroup'].'</strong></a></li>';
                        $prev = $value['problem_subgroup'];
                    }
                ?>
            </ul>
        </article>
    </section>

        <?php
        foreach($subgroup_array as $value) {
            echo '<section id="adultprob_'.$value['problem_id'].'_subprob_'.$value['subprob_no'].'" data-transition="slide" data-aside="features" class="drag">
        <header data-back="chevron-left">'.$problem_name['clinical_problem'].' - '.$value['subprob'].'
            <nav class="on-right">
                <a href="#"><abbr class="text tiny ">v0.1</abbr></a>
            </nav>
        </header><article id="subprob_'.$value['subprob_no'].'" class="list scroll active"><ul class="intended">
                <li><p>These are the conditions associated with <span style="font-style:italic;">'.$problem_name['clinical_problem'].' - '.$value['subprob'].'</span></p>
                <p>Click on a condition to see when in the course it appears and to make notes on it!</p></li>
            </ul><ul class="intendeds">';
            foreach($one_adult_prob as $value2)
            {
                if($value!=$value2['problem_subgroup']) continue;
                echo '<li class="selectable"><a href="#" data-view-article=""><strong>'.$value2['condition'].'</strong></a></li>';
            }   
            echo '</ul></article></section>';
        }

        ?>


