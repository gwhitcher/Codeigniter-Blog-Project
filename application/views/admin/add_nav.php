<h2>Add Sidebar</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/add_nav') ?>

	<label for="title">Title</label>
    <br />
	<input type="input" name="title" size="50"/>
    <br />
        
	<label for="url">Url</label>
    <br />
	<input type="input" name="url" size="50"/>
    <br />
	Position<br />
	<select name="position">
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	  <option value="10">10</option>
	  <option value="11">11</option>
	  <option value="12">12</option>
	  <option value="13">13</option>
	  <option value="14">14</option>
	  <option value="15">15</option>
	  <option value="16">16</option>
	  <option value="17">17</option>
	  <option value="18">18</option>
	  <option value="19">19</option>
	  <option value="20">20</option>
	</select>
	<br />
<input type="submit" name="submit" value="Post" />

</form>