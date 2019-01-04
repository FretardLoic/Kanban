<?php
class Login {
  public static function getLoginView($content) {

	return "<form>
		Login : <input type="text"><br>
		Password : <input type="password"><br>
		<input type="submit" value="Ok"><br>
	</form>";
  }
}
?>
