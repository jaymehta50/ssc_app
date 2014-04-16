<section id="adult_prob_<?php echo $one_adult_prob[0]['clinical_problem_id']; ?>" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a>
            </nav>
            <?php echo $problem_name['clinical_problem']; ?>
        </header>

        <article id="one_adult_prob" class="list scroll active">
            <div class="indented"><ul>
                <li><p>These are the subgroups of problems associated with <span style="font-style:italic;"><?php echo $problem_name['clinical_problem']; ?></span></p>
                <p>Click on one to see the condition(s) associated with it!</p></li>
            </ul></div>
            <div class="indenteds"><ul>
                <?php
                    $prev = "";
                    $subgroup_array = array();
                    $i = 0;
                    foreach($one_adult_prob as $value)
                    {
                        if($prev==$value['problem_subgroup']) continue;
                        $i += 1;
                        $subgroup_array[] = array('problem_id' => $value['clinical_problem_id'], 'subprob' => $value['problem_subgroup'], 'subprob_no' => $i);
                        echo '<a href="#" data-view-section="adultprob_'.$value['clinical_problem_id'].'_subprob_'.$i.'"><li class="selectable arrow"><strong>'.$value['problem_subgroup'].'</strong></li></a>';
                        $prev = $value['problem_subgroup'];
                    }
                ?>
            </ul></div>
        </article>
    </section>

        <?php
        foreach($subgroup_array as $value) {
            echo '<section id="adultprob_'.$value['problem_id'].'_subprob_'.$value['subprob_no'].'" data-transition="slide" data-aside="features" class="drag">
        <header><nav><a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a></nav>';
        if(($_COOKIE['devwidth'] - 42) >= (strlen($problem_name['clinical_problem'].': '.$value['subprob']) * 5)) echo "<marquee behavior='alternate'>".$problem_name['clinical_problem'].': '.$value['subprob']."</marquee>";
        else echo $problem_name['clinical_problem'].': '.$value['subprob'];

        echo '</header>
        <article id="subprob_'.$value['subprob_no'].'" class="list scroll active"><div class="indented"><ul>
                <li><p>These are the conditions associated with <span style="font-style:italic;">'.$problem_name['clinical_problem'].': '.$value['subprob'].'</span></p>
                <p>Click on a condition to see when in the course it appears and to make notes on it!</p></li>
            </ul></div><div class="intendeds"><ul>';
            foreach($one_adult_prob as $value2)
            {
                if($value['subprob']!=$value2['problem_subgroup']) continue;
                echo '<a href="#" data-view-article=""><li class="selectable arrow"><strong>'.$value2['condition'].'</strong></li></a>';
            }   
            echo '</ul></div></article></section>';
        }

        ?>