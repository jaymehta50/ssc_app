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
                    foreach($chunked[0] as $value)
                    {
                        echo '<li class="selectable"><a href="#" data-view-article="'.$value['clinical_problem'].'"><strong>'.$value['clinical_problem'].'</strong></a></li>';
                    }



                ?>
            </ul>
        </article>

        <article id="adult_prob_2" class="list indenteds scroll">
            <ul>
                <?php
                    foreach($chunked[1] as $value)
                    {
                        echo '<li class="selectable"><a href="#" data-view-article="'.$value['clinical_problem'].'"><strong>'.$value['clinical_problem'].'</strong></a></li>';
                    }
                ?>
            </ul>
        </article>

        <article id="adult_prob_3" class="list indenteds scroll">
            <ul>
                <?php
                    foreach($chunked[2] as $value)
                    {
                        echo '<li class="selectable"><a href="#" data-view-article="'.$value['clinical_problem'].'"><strong>'.$value['clinical_problem'].'</strong></a></li>';
                    }
                ?>
            </ul>
        </article>

        <footer>
        <nav>
            <a href="#" data-view-article="adult_prob_1" class="active">A-G</a>
            <a href="#" data-view-article="adult_prob_2">G-Q</a>
            <a href="#" data-view-article="adult_prob_3">Q-Z</a>
        </nav>
        </footer>

    </section>