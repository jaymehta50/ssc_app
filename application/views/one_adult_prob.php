<section id="adult_prob_<?php echo $one_adult_prob[0]['clinical_problem_id']; ?>" data-transition="slide" data-aside="features" class="drag">
        <header data-back="adult_prob">
            <nav>
                <a href="#" data-view-section="back" data-icon="chevron-left"></a>
            </nav>
            <?php echo $problem_name['clinical_problem']; ?>
            <nav class="on-right">
                <a href="#"  ><abbr class="text tiny ">v0.1</abbr></a>
            </nav>
        </header>

        <article id="one_adult_prob" class="list indenteds scroll active">
            <ul>
                <?php
                    $prev = "";
                    foreach($one_adult_prob as $value)
                    {
                        if($prev==$value['problem_subgroup']) continue;
                        echo '<li class="selectable"><a href="#"><strong>'.$value['problem_subgroup'].'</strong></a></li>';
                        $prev = $value['problem_subgroup'];
                    }
                ?>
            </ul>
        </article>

    </section>