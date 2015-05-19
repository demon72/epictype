<center>
<h3>До окончания конкурса на лицензионный ключ игры Dead Rising 3 осталось:</h3>
<br/>
<div class="clock" style="padding-left:90px;"></div>
Условия конкурса <a href="/konkurs" style="text-decoration:underline; color:#2B587A">тут</a>.
<br/><br/>
</center>
<script src="http://flipclockjs.com/_themes/flipclockjs/js/flipclock/flipclock.js"></script>
{literal}
<script>
	var clock;
	
	$(function() {
		var clock;
		var day = new Date("{/literal}{$time}{literal}");
		var now=(day.getDate()*24*3600)+(day.getHours()*3600)+(day.getMinutes()*60)+day.getSeconds();
		var date = new Date("2014-09-20 11:00");
		var lost=(date.getDate()*24*3600)+(date.getHours()*3600)+(date.getMinutes()*60)+date.getSeconds();
		clock = $('.clock').FlipClock(lost-now, {
			clockFace: 'HourCounter',
			countdown: true,
			callbacks: {
				stop: function() {
					$('.message').html('The clock has stopped!')
				}
			}
		});

	});
</script>{/literal}