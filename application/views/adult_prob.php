<section id="adult_prob" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#" data-view-aside="features" data-icon="menu"></a>
            </nav>
            Adult Problem List
            <nav class="on-right">
                <a href="#"  ><abbr class="text tiny ">v0.1</abbr></a>
            </nav>
        </header>

        <article id="adult_prob_1" class="list indenteds scroll active">
            <ul>
                <?php
                    $chunked = array_chunk($adult_probs,(round(count($adult_probs)/3)));
                    $one_first = TRUE;
                    foreach($chunked[0] as $value)
                    {
                        if($one_first) $one_first = $value['clinical_problem'][0];
                        $one_last = $value['clinical_problem'][0];
                        echo '<li class="selectable"><a href="#" data-view-article="'.$value['clinical_problem'].'"><strong>'.$value['clinical_problem'].'</strong></a></li>';
                    }



                ?>
            </ul>
        </article>

        <article id="adult_prob_2" class="list indenteds scroll">
            <ul>
                <?php
                    $two_first = TRUE;
                    foreach($chunked[1] as $value)
                    {
                        if($one_first) $two_first = $value['clinical_problem'][0];
                        $two_last = $value['clinical_problem'][0];
                        echo '<li class="selectable"><a href="#" data-view-article="'.$value['clinical_problem'].'"><strong>'.$value['clinical_problem'].'</strong></a></li>';
                    }
                ?>
            </ul>
        </article>

        <article id="adult_prob_3" class="list indenteds scroll">
            <ul>
                <?php
                    $three_first = TRUE;
                    foreach($chunked[2] as $value)
                    {
                        if($one_first) $three_first = $value['clinical_problem'][0];
                        $three_last = $value['clinical_problem'][0];
                        echo '<li class="selectable"><a href="#" data-view-article="'.$value['clinical_problem'].'"><strong>'.$value['clinical_problem'].'</strong></a></li>';
                    }
                ?>
            </ul>
        </article>

        <footer>
        <nav>
            <a href="#" data-view-article="adult_prob_1" class="active"><?php echo $one_first."-".$one_last;?></a>
            <a href="#" data-view-article="adult_prob_2"><?php echo $two_first."-".$two_last;?></a>
            <a href="#" data-view-article="adult_prob_3"><?php echo $three_first."-".$three_last;?></a>
        </nav>
        </footer>

    </section>