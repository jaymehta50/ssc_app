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

        <nav data-control="groupbar">
            <a href="#" data-view-article="course_progress" data-label="Course Progress" class="active"></a>
            <a href="#" data-view-article="add_note" data-label="Add New Note"></a>
            <a href="#" data-view-article="my_notes" data-label="My Notes"></a>
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
                            <td>Intro Course</td>
                                <?php
                                    if($condition['Core']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['Core']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Stage 1 & 3 Medicine</td>
                                <?php
                                    if($condition['medicine_1_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['medicine_1_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr><th colspan="2">Stage 1</th></tr>
                        <tr>
                            <td>General Practice</td>
                                <?php
                                    if($condition['general_practice']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['general_practice']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Surgery</td>
                                <?php
                                    if($condition['surgery_1']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['surgery_1']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr><th colspan="2">Stage 2</th></tr>
                        <tr>
                            <td>Women's Health</td>
                                <?php
                                    if($condition['women_health_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['women_health_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Psychiatry</td>
                                <?php
                                    if($condition['psych_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['psych_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>NRO</td>
                                <?php
                                    if($condition['nro_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['nro_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Oncology</td>
                                <?php
                                    if($condition['oncology_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['oncology_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Infectious Disease</td>
                                <?php
                                    if($condition['infectious_disease_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['infectious_disease_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Genitourinary Medicine</td>
                                <?php
                                    if($condition['gu_medicine_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['gu_medicine_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Cardiothoracic Medicine</td>
                                <?php
                                    if($condition['cardiothor_medicine_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['cardiothor_medicine_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Acute Care</td>
                                <?php
                                    if($condition['acute_care_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['acute_care_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr><th colspan="2">Stage 3</th></tr>
                        <tr>
                            <td>Perioperative Medicine</td>
                                <?php
                                    if($condition['perioperative_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['perioperative_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Surgery Stage 3</td>
                                <?php
                                    if($condition['surgery_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['surgery_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Dermatology</td>
                                <?php
                                    if($condition['dermatology_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['dermatology_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>Opthalmology</td>
                                <?php
                                    if($condition['opthalmology_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['opthalmology_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                        </tr>
                        <tr>
                            <td>ENT Medicine</td>
                                <?php
                                    if($condition['ent_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['ent_3']==2) echo "<td class='amber'>Amber</td>";
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
                            <button class="anchor accept margin-bottom" data-icon="ok" data-label="Save Note" onclick="saveNote('<?php echo $condition["id"]; ?>')"></button>
                        </fieldset>
                    </div>
                </li>
            </ul>
        </article>


        <article id="my_notes" class="list indented scroll">
            <div id="my_notes_<?php echo $condition['id']; ?>">
                <ul id="list_my_notes_<?php echo $condition['id']; ?>">
                <li>
                    <div style="text-align:center;margin:9px 0 10px 0;"><strong class='text bold'><?php echo $condition['condition']; ?></strong></div>
                    <p>You are currently looking at the condition "<?php echo $condition['condition']."\" (".$condition['clinical_problem'].": ".$condition['problem_subgroup'].")"; ?>.</p><br />
                    <p>Here you can review any notes that you have made on this condition.</p>
                </li>
                    <li>
                        <h2>My Notes</h2>
                    </li>
                    <?php
                        echo "<li id='no_notes_here_".$condition['id']."'";
                        if($notes) echo " style='display:none;'";
                        echo "><p>You do not have any notes on this condition at the moment</p></li>";
                        if($notes)
                        {
                            foreach($notes as $value)
                            {
                                echo "<li><div class='my_note'><p>".html_entity_decode($value['note'])."</p></div>
                                <a href='#' class='button cancel' data-label='Delete'><span class='icon remove'></span></a>
                                </li>";
                            }
                        }
                        ?>
                </ul>
            </div>
        </article>

    </section>