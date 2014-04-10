<section id="adult_prob" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#" data-view-aside="features" data-icon="menu"></a>
            </nav>
            <?php echo $one_adult_prob[0]['clinical_problem']; ?>
            <nav class="on-right">
                <a href="#"  ><abbr class="text tiny ">v0.1</abbr></a>
            </nav>
        </header>

        <article id="one_adult_prob" class="list indenteds scroll active">
            <ul>
                <?php
                    foreach($one_adult_prob as $value)
                    {
                        echo '<li class="selectable"><a href="#"><strong>'.$value['problem_subgroup'].'</strong></a></li>';
                    }
                ?>
            </ul>
        </article>

    </section>