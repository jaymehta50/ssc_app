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
                    <h2>Course Progress</h2>
                    <table class="course">
                        <tbody>
                        <tr>
                            <td>Core Condition</td>
                            <td>
                                <?php
                                    if($condition['Core']==1) echo "<td class='green'>Yes</td>";
                                    else echo "<td class='red'>No</td>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Intro Course</td>
                            <td>
                                <?php
                                    if($condition['Core']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['Core']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Stage 1 & 3 Medicine</td>
                            <td>
                                <?php
                                    if($condition['medicine_1_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['medicine_1_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        <tr><th colspan="2">Stage 1</th></tr>
                        <tr>
                            <td>General Practice</td>
                            <td>
                                <?php
                                    if($condition['general_practice']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['general_practice']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Surgery</td>
                            <td>
                                <?php
                                    if($condition['surgery_1']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['surgery_1']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr><th colspan="2">Stage 2</th></tr>
                        <tr>
                            <td>Women's Health</td>
                            <td>
                                <?php
                                    if($condition['women_health_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['women_health_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Psychiatry</td>
                            <td>
                                <?php
                                    if($condition['psych_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['psych_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>NRO</td>
                            <td>
                                <?php
                                    if($condition['nro_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['nro_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Oncology</td>
                            <td>
                                <?php
                                    if($condition['oncology_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['oncology_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Infectious Disease</td>
                            <td>
                                <?php
                                    if($condition['infectious_disease_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['infectious_disease_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Genitourinary Medicine</td>
                            <td>
                                <?php
                                    if($condition['gu_medicine_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['gu_medicine_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Cardiothoracic Medicine</td>
                            <td>
                                <?php
                                    if($condition['cardiothor_medicine_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['cardiothor_medicine_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Acute Care</td>
                            <td>
                                <?php
                                    if($condition['acute_care_2']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['acute_care_2']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr><th colspan="2">Stage 3</th></tr>
                        <tr>
                            <td>Perioperative Medicine</td>
                            <td>
                                <?php
                                    if($condition['perioperative_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['perioperative_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Surgery Stage 3</td>
                            <td>
                                <?php
                                    if($condition['surgery_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['surgery_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Dermatology</td>
                            <td>
                                <?php
                                    if($condition['dermatology_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['dermatology_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Opthalmology</td>
                            <td>
                                <?php
                                    if($condition['opthalmology_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['opthalmology_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>ENT Medicine</td>
                            <td>
                                <?php
                                    if($condition['ent_3']==3) echo "<td class='green'>Green</td>";
                                    elseif($condition['ent_3']==2) echo "<td class='amber'>Amber</td>";
                                    else echo "<td class='red'>Red</td>";
                                ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </li>

            </ul>
        </article>
    </section>
