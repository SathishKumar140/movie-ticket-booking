<script type="text/javascript">
function back(answer)
{

}
</script>
<?
for($i=1;$i<=7;$i++)
{
	$l=date('D d',strtotime('+'.$i.'day'));
?>
  <a id="<?echo $l?>"  onclick="back(this.id)" href="#"><?  echo date('D d',strtotime('+'.$i.'day'));?>"</a	>
  <?
}
?>
<div id="result">
</div>