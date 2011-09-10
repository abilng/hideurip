var xml = makeXML();
function makeXML () {
	if (typeof XMLHttpRequest == 'undefined') {
		objects = Array(
			'Microsoft.XMLHTTP',
			'MSXML2.XMLHTTP',
			'MSXML2.XMLHTTP.3.0',
			'MSXML2.XMLHTTP.4.0',
			'MSXML2.XMLHTTP.5.0'
		);
		for (i in objects) {
			try {
				return new ActiveXObject(objects[i]);
			} catch (e) {}
		}
	} else {
		return new XMLHttpRequest();
	}
}
// JavaScript Document
function set_fn()
{
	get('settings').style.display =  'block';
}
function h_back()
{
	window.history.back();
	
}
function h_forward()
{
	window.history.forward();
}
function h_refresh()
{
	
	window.history(-1);
}
function f_submit()
{
	document.form.submit();
}
function toggle_form () {
	get('proxy_toggle').innerHTML = get('proxy_form').style.display == 'none' ? '&nbsp&nbsp&nbsp&nbsp<strong style="color:#0C0">Hide_Me</strong>' : '<strong style="color:#0C0">Show_Me</strong>';
	get('proxy_form').style.display = get('proxy_form').style.display == 'none' ? 'block' : 'none';
	//get('toggle_button')style.border = get('proxy_form').style.display == 'none' ? 'groove' :'none' ;
}
function custom_handler () {
	/*
		If you want to add any additional JavaScript, here is the place to do it.
		It will be called after the page is fully loaded.
	*/

}

function get (id) {
	return document.getElementById(id);
}
function load_handler () {
	xml.open('get', 'form.php');
	xml.onreadystatechange = function () {
		if (xml.readyState == 4) {
			document.body.innerHTML += xml.responseText;
			get('proxy_url').value = __proxy_url;
			get('__no_javascript').checked = __no_javascript ? 'checked' : '';
			get('__no_images').checked = __no_images ? 'checked' : '';
			get('__no_title').checked = __no_title ? 'checked' : '';
			get('__no_meta').checked = __no_meta ? 'checked' : '';
                        if(get('proxy_form').style.display == 'none') toggle_form();
			custom_handler();
		}
	}
	xml.send(null);
}
if (typeof window.addEventListener != 'undefined') {
	window.addEventListener('load', load_handler, false);
} else if (typeof document.addEventListener != 'undefined') {
	document.addEventListener('load', load_handler, false);
} else if (typeof window.attachEvent != 'undefined') {
	window.attachEvent('onload', load_handler);
} else {
	if (typeof window.onload == 'function') {
		var existing = onload;
		window.onload = function () {
			existing();
			load_handler();
		}
	} else {
		window.onload = load_handler;
	}
}
