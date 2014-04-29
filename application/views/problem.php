<section id="problem_<?php echo $one_problem[0]['clinical_problem_id']; ?>" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a>
            </nav>
            <?php
                if(($_COOKIE['devwidth'] - 42) <= (strlen($problem_name['clinical_problem']) * $av_char_width)) echo "<marquee behavior='alternate' scrollamount='2' style='padding-right:7px;'>".$problem_name['clinical_problem']."</marquee>";
                else echo $problem_name['clinical_problem'];
            ?>
        </header>

        <article id="one_problem" class="list scroll active">
            <div class="indented"><ul>
                <li><div style="text-align:center;margin:9px 0 10px 0;"><strong class='text bold'><?php echo $problem_name['clinical_problem']; ?></strong></div>
                <p>Below are the sub-groups of problems associated with "<?php echo $problem_name['clinical_problem']; ?>".</p><br />
                <p>Go back to see the Problem List, or click on an option below to see the condition(s) associated with each problem.</p></li>
            </ul></div>
            <div class="indenteds"><ul>
                <?php
                    $prev = "";
                    $subgroup_array = array();
                    $i = 0;
                    foreach($one_problem as $value)
                    {
                        if($prev==$value['problem_subgroup']) continue;
                        $i += 1;
                        $subgroup_array[] = array('problem_id' => $value['clinical_problem_id'], 'subprob' => $value['problem_subgroup'], 'subprob_no' => $i);
                        echo '<a href="#" data-view-section="oneprob_'.$value['clinical_problem_id'].'_subprob_'.$i.'"><li class="selectable arrow"><strong>'.$value['problem_subgroup'].'</strong></li></a>';
                        $prev = $value['problem_subgroup'];
                    }
                ?>
            </ul></div>
        </article>
    </section>

        <?php
        foreach($subgroup_array as $value) {
            echo '<section id="oneprob_'.$value['problem_id'].'_subprob_'.$value['subprob_no'].'" data-transition="slide" data-aside="features" class="drag">
        <header><nav><a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a></nav>';
        if(($_COOKIE['devwidth'] - 42) <= (strlen($problem_name['clinical_problem'].': '.$value['subprob']) * $av_char_width)) echo "<marquee behavior='alternate' scrollamount='2' style='padding-right:7px;'>".$problem_name['clinical_problem'].': '.$value['subprob']."</marquee>";
        else echo $problem_name['clinical_problem'].': '.$value['subprob'];
        echo '</header><article id="subprob_'.$value['subprob_no'].'" class="list scroll active"><div class="indented"><ul>
                <li><div style="text-align:center;margin:9px 0 10px 0;"><strong class="text bold">'.$problem_name['clinical_problem'].': '.$value['subprob'].'</strong></div>
                <p>These are the conditions associated with the problem "'.$problem_name['clinical_problem'].': '.$value['subprob'].'".</p><br />
                <p>Click on a condition to see when in the course it appears and to make notes on it!</p></li>
            </ul></div><div class="intendeds"><ul>';
            foreach($one_problem as $value2)
            {
                if($value['subprob']!=$value2['problem_subgroup']) continue;
                echo '<a href="#" data-view-section="condition_'.$value2['id'].'" data-async="start/condition/'.$value2['id'].'"><li class="selectable arrow"><strong>'.$value2['condition'].'</strong></li></a>';
            }   
            echo '</ul></div></article></section>';
        }

        ?>