<ul><li><p>You are currently looking at your notes on:</p><div style="font-style:italic;text-align:center;margin:9px 0 10px 0;"><p><?php echo $condition['condition']; ?></p></div><p>You can also see your notes for conditions with the same name below:</p><h2>My Notes</h2></li><?php
if(!$notes) echo "<li><p>You do not have any notes on this condition at the moment</p></li>";
else
{
    foreach($notes as $value)
    {
        echo "<li><div class='my_note'><p>".$value['note']."</p></div></li>";
    }
}
?></ul>