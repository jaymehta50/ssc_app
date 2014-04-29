<section id="child_condition_<?php echo $condition['id']; ?>" data-transition="slide" data-aside="features" class="drag">
        <header>
            <nav>
                <a href="#back" data-view-section="back"><span class="icon chevron-left"></span></a>
            </nav>
            <?php
                if(($_COOKIE['devwidth'] - 42) <= (strlen($condition['condition']) * $av_char_width)) echo "<marquee behavior='alternate' scrollamount='2' style='padding-right:7px;'>".$condition['condition']."</marquee>";
                else echo $condition['condition'];
            ?>
        </header>

        <nav data-control="groupbar">
            <a href="#" data-view-article="course_progress" data-label="Course Progress" class="active"></a>
            <a href="#" data-view-article="add_note" data-label="Add New Note"></a>
            <a href="#" data-view-article="cond_my_notes" data-label="My Notes"></a>
        </nav>

        <article id="course_progress" class="list indented scroll active">
            <ul>
                <li>
                    <div style="text-align:center;margin:9px 0 10px 0;"><strong class='text bold'><?php echo $condition['condition']; ?></strong></div>
                    <p>You are currently looking at the condition "<?php echo $condition['condition']."\" (".$condition['clinical_problem'].": ".$condition['problem_subgroup'].")"; ?>.</p><br />
                    <p>You can review when in the course you would be expected to learn about this condition, add your own notes and review any existing notes on this condition.</p>
                </li>
                <li>
                    <h2>Course Progress</h2>
                    <table class="course">
                        <tbody>
                        <tr>
                            <td>Core Condition</td>
                                <?php
                                    if($condition['Core']==1) echo "<td class='green'>Yes</td>";
                                    else echo "<td class='red'>No</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Growth and Development (Stage 2)</td>
                                <?php
                                    if($condition['growth_dev_2']==4) echo "<td class='blue'>Blue</td>";
                                    elseif($condition['growth_dev_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['growth_dev_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>General Practice (all stages)</td>
                                <?php
                                    if($condition['gp_1_2_3']==4) echo "<td class='blue'>Blue</td>";
                                    elseif($condition['gp_1_2_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['gp_1_2_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        </tbody>
                    </table>
                </li>
            </ul>
        </article>



        <article id="add_note" class="list indented scroll">
            <ul>
                <li>
                    <div style="text-align:center;margin:9px 0 10px 0;"><strong class='text bold'><?php echo $condition['condition']; ?></strong></div>
                    <p>You are currently looking at the condition "<?php echo $condition['condition']."\" (".$condition['clinical_problem'].": ".$condition['problem_subgroup'].")"; ?>.</p><br />
                    <p>Below you can write your own notes for this condition.</p>
                </li>
                <li>
                    <h2>Add a Note</h2>
                    <div class="form">
                        <fieldset>
                            <textarea id="newnote" placeholder="Enter your new note here..."></textarea>
                            <button class="anchor accept margin-bottom" data-icon="ok" data-label="Save Note" onclick="saveNote(<?php echo $condition["id"]; ?>,1)"></button>
                        </fieldset>
                    </div>
                </li>
            </ul>
        </article>


        <article id="cond_my_notes" class="list indented scroll">
            <div id="my_notes_<?php echo $condition['id']; ?>">
                <ul id="list_my_notes_<?php echo $condition['id']; ?>c">
                <li>
                    <div style="text-align:center;margin:9px 0 10px 0;"><strong class='text bold'><?php echo $condition['condition']; ?></strong></div>
                    <p>You are currently looking at the condition "<?php echo $condition['condition']."\" (".$condition['clinical_problem'].": ".$condition['problem_subgroup'].")"; ?>.</p><br />
                    <p>Here you can review any notes that you have made on this condition.</p>
                </li>
                    <li>
                        <h2>My Notes</h2>
                    </li>
                    <?php
                        echo "<li id='no_notes_here_".$condition['id']."c'";
                        if($notes) echo " style='display:none;'";
                        echo "><p>You do not have any notes on this condition at the moment</p></li>";
                        if($notes)
                        {
                            foreach($notes as $value)
                            {
                                echo "<li id='cond_mynote_".$value['id']."c'><div class='my_note'><p class='text' id='cond_note_text_".$value['id']."c'>".html_entity_decode($value['note'])."</p><br />
                                <a href='#' class='button small' data-label='Edit' data-icon='pencil' onclick='editNote(".$value['id'].",2)'></a>
                                <a href='#' class='button cancel on-right small' data-label='Delete' data-icon='remove' onclick='removeNote(".$value['id'].",1)'></a></div>
                                </li>";
                            }
                        }
                        ?>
                </ul>
            </div>
        </article>

    </section>