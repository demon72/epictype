<div class="left">
<style>
{literal}
.center{height:100%;}
.page{height:100%;}
.content{height:100%;}
#feedback-form {
  width: 400px;
  padding: 2%;
  border-radius: 3px;
  background: #f1f1f1;
}
#feedback-form [required] {
  width: 100%;
  -moz-box-sizing: border-box; box-sizing: border-box;
  margin-bottom: 2%;
  padding: 2%;
  border: none;
  border-radius: 3px;
  overflow: auto;
  box-shadow: 0 -1px 0 rgba(0,0,0,.05) inset, 0 1px 2px rgba(0,0,0,.2) inset, 0 0 transparent;
}
#feedback-form [required]:hover {
  box-shadow: 0 0 0 1px #7eb4ea inset, 0 1px 2px rgba(0,0,0,.2) inset, 0 0 transparent;
}
#feedback-form [required]:focus {
  outline: none;
  box-shadow: 0 0 0 1px #7eb4ea inset, 0 1px 2px rgba(0,0,0,.2) inset, 0 0 4px rgba(35,146,243,.5);
  transition: .2s linear;
}
#feedback-form [type="submit"] {
  padding: 2%;
  width: 100%;
  border: none;
  border-radius: 3px;
  box-shadow: 0 0 0 1px rgba(0,0,0,.2) inset;
  background: #669acc;
  color: #fff;
}
#feedback-form [type="submit"]:hover {
  background: #5c90c2;
}
#feedback-form [type="submit"]:focus {
  box-shadow: 0 1px 1px #fff, inset 0 1px 2px rgba(0,0,0,.8), inset 0 -1px 0 rgba(0,0,0,.05);
}
{/literal}
</style>
<form method="POST" id="feedback-form">
Как к Вам обращаться:
<input type="text" name="fio" required placeholder="фамилия имя отчество" x-autocompletetype="name">
Email для связи:
<input type="email" name="email" required placeholder="адрес электронной почты" x-autocompletetype="email">
Ваше сообщение:
<textarea name="text" required rows="5"></textarea>
<input type="submit" value="отправить">
</form>
{$done}
</div>
<div class="right">
{include file="./blocks/right.tpl" type=$nm} 
</div>

<br clear="left"/>
