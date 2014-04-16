<section id="adult_condition_<?php echo $condition['id']; ?>" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a>
            </nav>
            <?php
                if(($_COOKIE['devwidth'] - 42) <= (strlen($condition['condition']) * $av_char_width)) echo "<marquee behavior='alternate' scrollamount='2' style='padding-right:7px;'>".$condition['condition']."</marquee>";
                else echo $condition['condition'];
            ?>
        </header>

        <article id="condition_<?php echo $condition['id']; ?>" class="list indented scroll active">
            <ul>
                <li>
                    <p>You are currently looking at:</p><div style="font-style:italic;text-align:center;margin:9px 0 10px 0;"><p><?php echo $condition['condition']; ?></p></div>
                    <p>You can review when in the course you would be expected to learn about this condition, add your own notes, and see where else in the Problem List this condition appears.</p>
                </li>
                <li>
                    <div onClick="$('#condition_<?php echo $condition['id']; ?>_course').slideToggle();"><span class="icon chevron-down"></span><h2>Course Progress</h2></div>
                    <div id="condition_<?php echo $condition['id']; ?>_course" style="display:none;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam posuere varius libero, vel aliquet velit tempus et. Curabitur ac sollicitudin neque. Duis vel ipsum lobortis, gravida urna et, convallis purus. Sed porttitor vehicula erat, a tempus nisi mattis in. Aenean pulvinar vestibulum lacus, at egestas orci egestas eget. Aliquam lobortis ipsum sed risus commodo, vitae fermentum ipsum ultrices. Maecenas gravida lorem non velit dictum convallis.</p></div>
                </li>

            </ul>
        </article>
    </section>

        <?php
        foreach($subgroup_array as $value) {
            echo '<section id="adultprob_'.$value['problem_id'].'_subprob_'.$value['subprob_no'].'" data-transition="slide" data-aside="features" class="drag">
        <header><nav><a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a></nav>';
        if(($_COOKIE['devwidth'] - 42) <= (strlen($problem_name['clinical_problem'].': '.$value['subprob']) * $av_char_width)) echo "<marquee behavior='alternate' scrollamount='2' style='padding-right:7px;'>".$problem_name['clinical_problem'].': '.$value['subprob']."</marquee>";
        else echo $problem_name['clinical_problem'].': '.$value['subprob'];
        echo '</header><article id="subprob_'.$value['subprob_no'].'" class="list scroll active"><div class="indented"><ul>
                <li><p>These are the conditions associated with:</p><div style="font-style:italic;text-align:center;margin:9px 0 10px 0;"><p>'.$problem_name['clinical_problem'].': '.$value['subprob'].'</p></div>
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