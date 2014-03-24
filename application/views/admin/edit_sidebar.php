<h2>Add sidebar item</h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/edit_sidebar/'.$sidebarid.'') ?>
	<label for="title">Title</label>
    <br />
	<input name="title" title="title" type="input" value="<?php echo $sidebar['title']; ?>" size="50" />
    <br /> 
	<label for="body">Body</label>
    <br />
	<textarea class="mceNoEditor" name="body" cols="105" rows="10"><?php echo $sidebar['body']; ?></textarea>
    <br />
    Position<br />
	<select name="position">
	  <option value="1" <?php if($sidebar['position'] == '1') echo 'selected="selected"'; ?>>1</option>
	  <option value="2" <?php if($sidebar['position'] == '2') echo 'selected="selected"'; ?>>2</option>
	  <option value="3" <?php if($sidebar['position'] == '3') echo 'selected="selected"'; ?>>3</option>
	  <option value="4" <?php if($sidebar['position'] == '4') echo 'selected="selected"'; ?>>4</option>
	  <option value="5" <?php if($sidebar['position'] == '5') echo 'selected="selected"'; ?>>5</option>
	  <option value="6" <?php if($sidebar['position'] == '6') echo 'selected="selected"'; ?>>6</option>
	  <option value="7" <?php if($sidebar['position'] == '7') echo 'selected="selected"'; ?>>7</option>
	  <option value="8" <?php if($sidebar['position'] == '8') echo 'selected="selected"'; ?>>8</option>
	  <option value="9" <?php if($sidebar['position'] == '9') echo 'selected="selected"'; ?>>9</option>
	  <option value="10" <?php if($sidebar['position'] == '10') echo 'selected="selected"'; ?>>10</option>
	  <option value="11" <?php if($sidebar['position'] == '11') echo 'selected="selected"'; ?>>11</option>
	  <option value="12" <?php if($sidebar['position'] == '12') echo 'selected="selected"'; ?>>12</option>
	  <option value="13" <?php if($sidebar['position'] == '13') echo 'selected="selected"'; ?>>13</option>
	  <option value="14" <?php if($sidebar['position'] == '14') echo 'selected="selected"'; ?>>14</option>
	  <option value="15" <?php if($sidebar['position'] == '15') echo 'selected="selected"'; ?>>15</option>
	  <option value="16" <?php if($sidebar['position'] == '16') echo 'selected="selected"'; ?>>16</option>
	  <option value="17" <?php if($sidebar['position'] == '17') echo 'selected="selected"'; ?>>17</option>
	  <option value="18" <?php if($sidebar['position'] == '18') echo 'selected="selected"'; ?>>18</option>
	  <option value="19" <?php if($sidebar['position'] == '19') echo 'selected="selected"'; ?>>19</option>
	  <option value="20" <?php if($sidebar['position'] == '20') echo 'selected="selected"'; ?>>20</option>
	</select>
	<br />
<input type="submit" name="submit" value="Add" />
</form>