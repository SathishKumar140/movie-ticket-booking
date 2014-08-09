<?
for($i=-1;$i<=6;$i++)
{
?>
  <input type="submit" id="btt" name="time" value="<?  echo date('D d',strtotime('+'.$i.'day'));?>" onclick="this.style.backgroundColor='#e1e2e3'" />
  <?
}
?>