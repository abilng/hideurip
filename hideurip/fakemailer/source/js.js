function get (id) 
{
	return document.getElementById(id);
}
function en()
{
	get('er').style.display =  'block';
}
function se()
{
	get('er').style.display =  'none';
}
function theChecker()
{ 
if(document.theForm.theCheck.checked==false)
{
document.theForm.theButton.disabled=true;
se();
}
else
{
document.theForm.theButton.disabled=false;
en();
}
}
