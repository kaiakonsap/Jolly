<p>Töö muutmine</p>



<form  action=<?=URL::base()?>tasks/update method="post">
    <div class="control-group">
        <label class="control-label" for="input1">Töö tegija</label>
        <div class="controls">
            <input type="text" id="input1" name="task[id]"
                   value="<?=$tasks_edit->user_id?>"readonly>
        </div>

    </div>
    <div class="control-group">
        <label class="control-label" for="input2">Töö tehti</label>
        <div class="controls">
            <input type="text" id="input2" name="task[created]"value="<?=$tasks_edit->created?>"readonly>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="input3">Töö kirjeldus</label>
        <div class="controls">
            <textarea input class="input-xlarge" rows="3" cols="3" id="input3"name="task[name]"><?=$tasks_edit->name?></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="input4">Kulunud aeg</label>
        <div class="controls">
            <input type="hh" id="input4"name="task[time]"value="<?=$tasks_edit->time?>">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="input5">Kommentaarid</label>
        <div class="controls">
            <textarea input class="input-xlarge" rows="3" cols="3" id="input5"name="task[notes]"><?=$tasks_edit->notes?></textarea>
        </div>
    </div>
    <button class="btn btn-primary" button type="submit">Muuda</button>
    <div class="control-group">
        <label class="control-label" for="input1"></label>
        <div class="controls">
            <input style="display:none" type="text" id="input" name="task[task_id]"
                   value="<?=$tasks_edit->id?>"readonly>
        </div>
</form>
