<form method="POST" action="/laravel/public/otp"/>
Название категории<br>
<input type="text" name="title"/><br>
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<input type="submit" value="Сохранить">
</form>