<?php
function AddComment($id)
{
echo '
<form action="news.php?id="'.$id.'" method="POST">
<p><textarea rows="5" name="comment" class="uf-txt-input commFl js-start-txt" placeholder="Оставьте ваш комментарий..."></textarea></p>
<p><input type="submit" value="Отправить"></p>
</form>
';
}
?>