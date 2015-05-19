{literal}
<style>
.center{height:100%;}
.page{height:100%;}
.content{height:100%;}
</style>
{/literal}
<div class="cl">
{if $pg eq 'register'}
<form method="POST">
<input type="text" name="email" required><br/>
<input type="password" name="password" required><br/>
<input type="submit" name="go">
</form>
{if $err}{$err}{/if}
{/if}
</div>
<div class="cr">
sadsad
</div>
<br clear="left">