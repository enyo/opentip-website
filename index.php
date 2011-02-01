<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="matthias loitsch" />
	<meta name="description" content="Opentip is a free powerful tooltip class based on the prototype framework." />
	<meta name="keywords" content="tooltip opentip prototip alternative prototype free open source opensource" />

	<title>Opentip | The free tooltip</title>

	<!-- Facebook like button: -->
	<meta property="og:title" content="Opentip"/>
	<meta property="og:site_name" content="www.opentip.org"/>

	<style type="text/css">
		@import "http://src.opentip.org/opentip.css?v=2";
		@import "http://src.opentip.org/opentip.contentDesign.css?v=2";
		@import "stylesheets/general.css";
	</style>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.2/scriptaculous.js"></script>

	<script type="text/javascript" src="http://src.opentip.org/opentip.js?v=2"></script>
<!--	<script type="text/javascript" src="http://unstable.opentip.org/opentip.js"></script>-->

	<script type="text/javascript">
		Opentip.styles.codeSample = {
			showOn: 'click',
			hideOn: 'click',
			targetJoint: [ 'right', 'middle' ],
			tipJoint: [ 'left', 'middle' ],
			stem: true
		};
// 		Opentip.debugging = true;
	</script>
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-10460456-1");
			pageTracker._trackPageview();
		} catch(err) {}
	</script>
	<meta name="verify-v1" content="u0cxJg5eYRK2tPEV2xWauQ9ahgNEI9gHXnvCZix8yZE=" />
</head>
<body>

<!--[if lte IE 6]>
<div style="border-bottom: 1px solid #c98F00;background: #FCE509; padding: 10px 15px; position: relative; color: #FF4900;">
	You are viewing this page in Internet Explorer 6. I recommend using a <a style="color: #ee3800;" href="http://www.mozilla.com/en-US/firefox/firefox.html">better browser</a>.
</div>
<![endif]-->

<div id="container">
	<div id="header">
		<div class="logo"><span>Opentip</span></div>
	</div>
	<div id="content">
		<h1>Opentip is a Javascript Class built on the Prototype framework. It provides easy to use tooltips. Yes - it's free, open source and comes with different styles!</h1>
		<div class="box">
			<h2>Demos</h2>

			<div class="demoBox">
				<div class="demo" id="stylesDemo">
					<div class="title">Styles</div>
					<div class="description">
						We offer a view styles, and it's easy to create your own styles.
					</div>
				</div>
				<script type="text/javascript">
				// <![CDATA[
					Tips.add('stylesDemo', 'That\'s the standard style.<br />It is simple, and fits with most websites.', 'Standard style', { style: 'standard', target: true, stem: true, tipJoint: [ 'left', 'middle' ] });
					Tips.add('stylesDemo', 'That\'s the rounded style.<br />More... round.', 'Rounded style', { style: 'rounded', target: true, stem: true, tipJoint: [ 'left', 'bottom' ] });
					Tips.add('stylesDemo', 'This is the slick style.<br />This one is polished and without color.', 'Slick style', { style: 'slick', target: true, stem: true, tipJoint: [ 'center', 'bottom' ] });
					Tips.add('stylesDemo', 'This is the glass style.<br />The glass style takes more place but is... well, better looking.', 'Glass style', { style: 'glass', target: true, stem: true, tipJoint: [ 'center', 'top' ] });
				// ]]>
				</script>

				<div class="demo" id="effectsDemo">
					<div class="title">Effects</div>
					<div class="description">
						You can easily use any effect to make a tooltip appear or disappear. Opentip uses CSS3 or Scriptaculous to animate.
					</div>
				</div>
				<script type="text/javascript">
                    if (Opentip.useCss3Transitions) {
                      Tips.add('effectsDemo', 'This one fades in.',   { showEffect: 'appear',    showEffectDuration: 1, delay: 0,   target: true, stem: true, tipJoint: [ 'center', 'bottom' ], targetJoint: [ 'center', 'top' ] });
                      Tips.add('effectsDemo', 'This one grows.',       { showEffect: 'grow',      showEffectDuration: 1, delay: 0.2, target: true, stem: true, tipJoint: [ 'left', 'middle' ], targetJoint: [ 'right',  'middle' ] });
                      Tips.add('effectsDemo', 'This one rotates.', { showEffect: 'rotate', hideEffect: 'rotate', showEffectDuration: 1, hideEffectDuration: 1, delay: 0.8, target: true, stem: true, tipJoint: [ 'center', 'top' ],    targetJoint: [ 'center', 'bottom' ] });
                      Tips.add('effectsDemo', 'This one kinda shrinks and stuff.', { showEffect: 'condense', hideEffect: 'puff', showEffectDuration: 1, hideEffectDuration: 1, delay: 1.2, target: true, stem: true, tipJoint: [ 'right', 'middle' ], targetJoint: [ 'left', 'middle' ] });
                    }
                    else {
                      Tips.add('effectsDemo', 'This one fades in.',   { showEffect: 'appear',    showEffectDuration: 1, delay: 0,   target: true, stem: true, tipJoint: [ 'center', 'bottom' ], targetJoint: [ 'center', 'top' ] });
                      Tips.add('effectsDemo', 'This one grows.',       { showEffect: 'grow',      showEffectDuration: 1, delay: 0.8, target: true, stem: true, tipJoint: [ 'left', 'middle' ], targetJoint: [ 'right',  'middle' ] });
                      Tips.add('effectsDemo', 'This one blinds down.', { showEffect: 'blindDown', showEffectDuration: 1, delay: 1.6, target: true, stem: true, tipJoint: [ 'left', 'top' ],    targetJoint: [ 'center', 'bottom' ] });
                    }
					
				</script>

				<div class="demo">
					<div class="title">Events</div>
					<div class="description">
						<button id="demoTarget">Click me to make<br /> a tooltip appear</button><br />
						<input id="eventDemo" type="text" value="Edit me..." />
					</div>
				</div>
				<script type="text/javascript">
				// <![CDATA[
					$('demoTarget').addTip('Focus this input field to make me disappear.<br />You don\'t have to <em>click</em> into it: <strong>tabbing</strong> in the input field also works.',
						{ showOn: 'click', hideOn: 'focus', hideTrigger: 'eventDemo', target: 'eventDemo', tipJoint: [ 'center', 'top' ], stem: true });
					$('eventDemo').addTip('This input field has changed!',
						{ showOn: 'change', hideTrigger: 'closeButton', target: 'eventDemo', tipJoint: [ 'right', 'middle' ], stem: true });

					var demoTextTarget = 'This one has the <em>button</em> as target.<br />The <strong>target joint</strong> is the bottom left corner, and the <strong>tooltip joint</strong> is the top right corner';
				// ]]>
				</script>

				<div class="demo" onmouseover="javascript:Tips.add(this, event, demoTextTarget, { style: 'slick', target: 'demoTarget', tipJoint: [ 'right', 'top' ], targetJoint: ['left', 'bottom'], stem: true });">
					<div class="title">Joints &amp; targets</div>
					<div class="description">
						With joints and targets it's extremely easy to position your tooltips exactly where you want them.
					</div>
				</div>

				<div class="demo" id="stemDemo">
					<div class="title">Stems</div>
					<div class="description">
						If you activate a stem, it gets automatically positioned at the tooltip joint, but you can overrule the position.
					</div>
				</div>
				<script type="text/javascript">
					Tips.add('stemDemo', 'Stems',  { stem: [ 'right', 'bottom' ], stemSize: 20, tipJoint: [ 'center', 'bottom' ] });
					Tips.add('stemDemo', 'are',   { stem: [ 'left', 'middle' ], stemSize: 12, tipJoint: [ 'left', 'middle' ] });
					Tips.add('stemDemo', 'so',   { stem: [ 'center', 'bottom' ], stemSize: 8, tipJoint: [ 'right', 'middle' ] });
					Tips.add('stemDemo', 'cool', { stem: [ 'right', 'top' ], stemSize: 4, tipJoint: [ 'right', 'top' ] });
				</script>

				<div class="demo" onmouseover="javascript:Tips.add(this, event, { ajax: { url: 'ajaxDemo.php' }});">
					<div class="title">AJAX</div>
					<div class="description">
						By adding one option, your opentip automatically downloads content with Ajax.
					</div>
				</div>
			</div>

			<div class="clear"></div>
		</div>

		<a onmouseover="javascript:Tips.add(this, event, 'You know you want to...', { delay: 5 });" target="_blank" name="download" class="download" href="http://github.com/enyo/opentip/"><span class="big">Download Opentip</span><span class="version">1.2.8</span><span class="date">Nov, 30 2009</span></a>

		<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.opentip.org%2F&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:750px; height:35px;" allowTransparency="true"></iframe>
		
		

		<div class="box">
			<h2>Implementation</h2>
			<p>
				Creating a tooltip is really easy.<br />
				Either define it in the element event (be sure to pass the <strong>event</strong>):
			</p>
			<code>&lt;div onmouseover="javascript:Tips.add(this, event, <span class="string">'content'</span>, <span class="string">'optional title'</span>);"&gt;&lt;/div&gt;</code>
			<p>
				...or create it externally. Following approaches are identical:
			</p>
			<code>Tips.add(<span class="string">'elementId'</span>, <span class="string">'content'</span>, <span class="string">'optional title'</span>);<br />
$(<span class="string">'elementId'</span>).addTip(<span class="string">'content'</span>, <span class="string">'optional title'</span>);</code>
			<p>
				To create a more complex tooltip, you pass an option object to the tooltip:
			</p>
			<code>$('elementId').addTip('content', {<br />
  stem: true,<br />
  tipJoint: [ 'bottom', 'top' ],<br />
  showOn: 'click',<br />
  ajax: { url: 'address' },<br />
  etc...<br />
});</code>
			<p>
				The full documentation can be found below!<br />
				Have fun.
			</p>
		</div>


		<a id="contactLink" class="contact" name="contact" href="javascript:undefined">Contact me</a>
		<script type="text/javascript">
			$('contactLink').addTip(function() {
				var name, email, message;
				return Builder.node('form', { action: 'javascript:undefined' }, [
					Builder.node('label', 'Your name'),
					name = Builder.node('input', { type: 'text' }, ''),
					Builder.node('label', 'Your email'),
					email = Builder.node('input', { type: 'text' }, ''),
					Builder.node('label', 'Your message'),
					message = Builder.node('textarea', {}, ''),
					Builder.node('button', { className: 'close', type: 'submit' }, 'Send message')
				]).observe('submit', function() {
					var self = this;
					new Ajax.Request('sendMessage.php',
						{
							parameters: { name: name.getValue(), email: email.getValue(), message: message.getValue() },
							onSuccess: function(transport) {
								var content = transport.responseText;
								if (content) {
									alert(content);
								} else {
									self.reset();
									alert('Thanks.');
								}
						} });
				});
			}, { style: 'glass', stem: true, showOn: 'click', target: true, tipJoint: [ 'center', 'top' ], hideTrigger: 'closeButton' });
		</script>

		<a id="googleGroupsLink" class="contact" target="_blank" name="googleGroups" href="http://groups.google.com/group/opentip"><span>Google groups</span></a>

	</div>
	<script type="text/javascript">
		Opentip.styles.documentation = {
			target: true,
			className: 'slick',
			tipJoint: [ 'left', 'middle' ],
			offset: [ 40, 0 ],
			stem: true,
			hideTrigger: null,
			showEffect: null,
			showOn: 'creation'
		};
	</script>

	<div id="documentation">
		<a name="documentation"></a>
		<h1>Documentation</h1>
		<div class="content">
			<h2>Introduction</h2>
			<p>
				An opentip can be created in two different ways. Both are completely equivalent:
			</p>
			<code id="creating-documentation">&lt;div onmouseover="javascript:Tips.add(
  <span class="constant">this</span>,
  <span class="constant">event</span>,
  <span class="string">'content'</span>,
  <span class="string">'optional title'</span>,
  { options... });"&gt;&lt;/div&gt;

&lt;script type="text/javascript"&gt;
  $('elementId').addTip(
    <span class="string">'content'</span>,
    <span class="string">'optional title'</span>,
    { options...});
&lt;/script&gt;</code>
			<script type="text/javascript">
				// <![CDATA[
				Tips.add('creating-documentation', 'Please note that when creating an opentip in an event (such as onmouseover or onclick) you have to pass <strong>this</strong> and the <strong>event</strong> as first parameters!', { style: 'documentation' });
				// ]]>
			</script>
			<p>
				The following is also possible, but really just a hack I implemented for compatibility reasons with other tooltip classes.
			</p>
			<code id="alternative-documentation"><span class="comment">// When called externally:</span>
new Tip('elementId', etc...); 
<span class="comment">// When called as event (eg: onmouseover or onclick): </span>
new Tip(this, event, etc...);</code>
			<script type="text/javascript">
				// <![CDATA[
				Tips.add('alternative-documentation', 'I strongly advise <strong>not</strong> to use new Tip(), because it does not really create a new object. It\'s merely a wrapper for Tips.add();', { style: 'documentation' });
				// ]]>
			</script>
			<p>
				Those are the possible ways to pass arguments:
			</p>
			<code>$('elementId').addTip(<span class="string">'content'</span>, <span class="string">'title'</span>, { options...});<br />
$('elementId').addTip(<span class="string">'content'</span>, { options...});<br />
$('elementId').addTip({ options...}); <span class="comment">// Only makes sens with AJAX</span></code>
			<a name="documentation-options"></a>
			<h2>Options</h2>
			<p>
				The options object contains following values:
			</p>
			<div class="options">
				<div class="option">
					<span class="name">className</span><span class="description">The class name to be used.</span><span class="defaultValue">'standard'</span>
				</div>

				<div class="option" id="option-stem">
					<span class="name">stem</span><span class="description">Three possible values:<br /><strong>false</strong>: no stem<br /><strong>true</strong>: stem at tipJoint POSITION<br /><strong>POSITION</strong> (for stems in other directions)</span><span class="defaultValue">false</span>
				</div>
				<script type="text/javascript">
					// <![CDATA[
					Tips.add('option-stem', '<strong>POSITION</strong> is an array containing 2 values, the horizontal and vertical position, like this: <br />[ \'left|center|right\', \'top|middle|bottom\' ].<br />', { style: 'documentation' });
					// ]]>
				</script>

				<div class="option">
					<span class="name">delay</span><span class="description">In seconds. If null the best delay is automatically chosen (depending on the showOn event).</span><span class="defaultValue">null</span>
				</div>

				<div class="option">
					<span class="name">hideDelay</span><span class="description">In seconds.</span><span class="defaultValue">0.1</span>
				</div>

				<div class="option" id="option-fixed">
					<span class="name">fixed</span><span class="description">If target is not null, elements are always fixed.</span><span class="defaultValue">false</span>
				</div>
				<script type="text/javascript">
					// <![CDATA[
					Tips.add('option-fixed', 'Fixed simply means that it does not follow the mouse.', { style: 'documentation' });
					// ]]>
				</script>

				<div class="option" id="option-showOn">
					<span class="name">showOn</span><span class="description">Event name (eg: 'mouseover'), or 'creation' if you want it to show when the tooltip is created. Null if you want no event.</span><span class="defaultValue">'mouseover'</span>
				</div>
				<script type="text/javascript">
					// <![CDATA[
					Tips.add('option-showOn', 'If you add an Opentip directly in an html event (eg: onclick="...") this event will be used.<br />If showOn == \'click\', links will be disabled.', { style: 'documentation' });
					// ]]>
				</script>

				<div class="option" id="option-hideTrigger">
					<span class="name">hideTrigger</span><span class="description">Which element should trigger the hiding process.<br />Possible values are: 'trigger', 'tip', 'target', 'closeButton', <strong>ELEMENT</strong>, or null</span><span class="defaultValue">'trigger'</span>
				</div>
				<script type="text/javascript">
					// <![CDATA[
					Tips.add('option-hideTrigger', 'Whenever you see <strong>ELEMENT</strong>, it\'s either an element, or an element id.<br />When you choose \'closeButton\' a button is automatically added to the header.<br />null means you want to trigger the hiding yourself.', { style: 'documentation' });
					// ]]>
				</script>

				<div class="option">
					<span class="name">hideOn</span><span class="description">Event name. (eg: 'click'). If false Opentip decides which event is best ('click' for closeButton, 'mouseout' if not).</span><span class="defaultValue">null</span>
				</div>

				<div class="option">
					<span class="name">offset</span><span class="description">Defined like this: [ xInteger, yInteger ].</span><span class="defaultValue">[ 0, 0 ]</span>
				</div>

				<div class="option" id="option-autoOffset">
					<span class="name">autoOffset</span><span class="description">If set to true, offsets are calculated automatically to position the tooltip. (pixels are added if there are stems for example)</span><span class="defaultValue">true</span>
				</div>
				<script type="text/javascript">
					// <![CDATA[
					Tips.add('option-autoOffset', 'There are only <strong>very</strong> view cases where you wouldn\'t want this behaviour.<br />Use the offset option in combination with this one.', { style: 'documentation' });
					// ]]>
				</script>

				<div class="option" id="option-containInViewport">
					<span class="name">containInViewport</span><span class="description">If set to true, opentips that would appear offscreen are repositioned inside the browser viewport. targetJoints, tipJoints and stems are also repositioned.</span><span class="defaultValue">true</span>
				</div>

				<div class="option" id="option-showEffect">
					<span class="name">showEffect</span><span class="description">The string of the scriptaculous effect you would call as a function on the object.</span><span class="defaultValue">'appear'</span>
				</div>
				<script type="text/javascript">
					// <![CDATA[
					Tips.add('option-showEffect', 'For a list of effects, visit the <a target="_blank" href="http://wiki.github.com/madrobby/scriptaculous">scriptaculous wiki</a>.', { style: 'documentation' });
					// ]]>
				</script>

				<div class="option">
					<span class="name">hideEffect</span><span class="description">The same as show effect</span><span class="defaultValue">'fade'</span>
				</div>

				<div class="option">
					<span class="name">showEffectDuration</span><span class="description">Expressed in seconds</span><span class="defaultValue">0.3</span>
				</div>

				<div class="option">
					<span class="name">hideEffectDuration</span><span class="description">Expressed in seconds</span><span class="defaultValue">0.2</span>
				</div>

				<div class="option">
					<span class="name">stemSize</span><span class="description">An integer defining the stem size in pixels.</span><span class="defaultValue">8</span>
				</div>

				<div class="option">
					<span class="name">tipJoint</span><span class="description">This is a <strong>POSITION</strong>.<br />The tip joint defines which part of the tooltip is the "pointer".</span><span class="defaultValue">[ 'left', 'top' ]</span>
				</div>

				<div class="option">
					<span class="name">target</span><span class="description">If null, no target.<br />If true: the trigger element is the target.<br />Otherwise pass an <strong>ELEMENT</strong>.</span><span class="defaultValue">null</span>
				</div>

				<div class="option">
					<span class="name">targetJoint</span><span class="description">This is a <strong>POSITION</strong>.<br />The target joint defines where the tooltip points to. If set to null, it's the opposite of tipJoint.</span><span class="defaultValue">null</span>
				</div>

				<div class="option" id="option-ajax">
					<span class="name">ajax</span><span class="description">An object formed like this:<br />{ url: 'address', options: { AJAXoptions } }<br />For more information on Ajax tips see the examples section.</span><span class="defaultValue">false</span>
				</div>
				<script type="text/javascript">
					// <![CDATA[
					Tips.add('option-ajax', 'For a full reference for Ajax options please visit the <a target="_blank" href="http://www.prototypejs.org/api/ajax/options">prototype api docs</a>.', { style: 'documentation' });
					// ]]>
				</script>

				<div class="option">
					<span class="name">group</span><span class="description">Simply pass a string as the group name (eg: 'login'), and all visible tooltips in this group will be hidden when a tooltip in this group is shown.</span><span class="defaultValue">null</span>
				</div>

				<div class="option">
					<span class="name">escapeHtml</span><span class="description">If true, the passed content will be html escaped.</span><span class="defaultValue">false</span>
				</div>


			</div>
			<p>
				As you see you can decide when the tooltip disappears by selecting a hideOn event.<br />
				But you can also easily define your own close buttons. In fact, as soon as opentip finds an element with the class 'close' it observes this element as close button.<br />
				So just add this to your content (this also works with Ajax):
			</p>
			<code>&lt;button class="close"&gt;Click me to close&lt;/button&gt;<br />
<span class="comment">// or </span><br />
&lt;a href="javascript:undefined;" class="close"&gt;Click me to close&lt;/a&gt;</code>
			<a name="documentation-styles"></a>
			<h2>Styles</h2>
			<p>
				Styles are an easy way to setup your opentips without having to pass the options every time you want an opentip to appear.<br />
				Styles are a way to group options, and reuse them.<br />
				The styles we offer differ mainly in the design, but styling can be much more useful!
			</p>
			<code>Opentip.styles.myNewStyle = {<br />
  className: 'slick',<br />
  stem: true,<br />
  stemSize: 12,<br />
  target: true,<br />
  showEffect: null<br />
};<br />
$('myElement').addTip('Just testing.', { style: 'myNewStyle' });</code>
			<p>
				If you want all your opentips to use a certain style, you can define it like this:
			</p>
			<code>Opentip.defaultStyle = 'rounded';</code>
			<a name="documentation-examples"></a>
			<h2>Examples</h2>
			<h3>Ajax</h3>
			<p>
				Simple Ajax example that loads the content that contains a close button:
			</p>
			<code>$('elementId').addTip({<br />
	showOn: 'click',<br />
	ajax: { url: 'ajaxcontent.html' },<br />
	hideTrigger: null,<br />
	fixed: true<br />
});<br />
<span class="comment"><?php echo htmlentities('// Ajax returns:
// The content loaded successfully!<br />
// <button class="close">Click me to close</button>'); ?></span></code>
			<p>
				<button id="example-ajax">Click me to view example.</button>
			</p>
			<h3>Ajax link</h3>
			<p>
				This is even easier: transform a link into an Ajax opentip with one line:
			</p>
			<code><?php echo htmlentities('<a href="ajaxDemo.php"
   onclick="javascript:Tips.add(this, event, { ajax: true });">
      Click me to load Ajax</a>'); ?></code>
			<p>
				<a href="ajaxDemo.php" onclick="javascript:Tips.add(this, event, { ajax: true });">Click me to load Ajax</a>
			</p>
			<p>
				Note that this creates valid links that point to your resource, so search engines can index those resources.<br />
				When an opentip is added to a link and the ajax option is set, but no url is given, Opentip automatically uses the href
				attribute of the link as Ajax url. If you want to pass additional parameters to the ajax call, just use:
			</p>
			<code>Tips.add(this, event, { ajax: { options: [...] } });</code>
			<h3>Forms</h3>
			<p>
				Opentip is quite usefull to manage forms too.<br />
				This example shows how you would notifiy a user an input field is not correct.<br />
				In this case username can't be empty, and the notification only disappears when the user changes the input.
			</p>
			<code id="form-example-code">
<?php echo htmlentities('<form id="myForm" action="javascript:undefined">
  Username<br />
  <input name="username" type="text" value="" /><br />
  <input type="submit" value="Submit" />
</form>

<script type="text/javascript">
  $("myForm").observe("submit", function() {
    if (!this.username.present()) {

      $(this.username).addTip("This can\'t be empty", {
        target: true,
        stem: true,
        tipJoint: [ "left", "middle" ],
        showOn: "creation",
        hideOn: "change"
      });

    }
    return undefined;
  });
</script>'); ?>
</code>
			<p>
				And here what it looks like:
			</p>
			<form id="opentipFormTest" action="javascript:undefined">
				Username<br />
				<input name="username" type="text" value="" /><br />
				<input type="submit" value="Submit" />
			</form>
			<script type="text/javascript">
			$("opentipFormTest").observe("submit", function() {
				if (!$(this.username).present()) {
					$(this.username).addTip("This can't be empty", {
						target: true,
						stem: true,
						tipJoint: [ "left", "middle" ],
						showOn: 'creation',
						hideOn: "change"
						});
					}
				return undefined;
			});
			</script>
			<script type="text/javascript">
				$('example-ajax').addTip({ showOn: 'click', ajax: { url: 'ajaxcontent.html' }, hideTrigger: null, fixed: true });
			</script>
			<h3>Groups</h3>
			<p>
				Sometimes you want to group tooltips, so only one is shown at a time.<br />
			</p>
			<code><?php echo htmlentities('<script type="text/javascript">
  Opentip.styles.grouped = {
    group: \'login\',
    hideOn: \'click\',
    target: true,
    stem: true,
    tipJoint: [ \'center\', \'top\' ]
  }
</script>'); ?>


<?php echo htmlentities('<a href="javascript:undefined;"
   onclick="javascript:Tips.add(this, event, \'Login!\',
      { style: \'grouped\' });">Vote</a>'); ?>


<?php echo htmlentities('<a href="javascript:undefined;"
   onclick="javascript:Tips.add(this, event, \'Login!\',
      { style: \'grouped\' });">Comment</a>'); ?></code>
			<p>This results in:</p>
			<script type="text/javascript">
				Opentip.styles.grouped = {
					group: 'login',
					hideOn: 'click',
					target: true,
					stem: true,
					tipJoint: [ 'center', 'top' ]
				}
			</script>
			<p>
				<a href="javascript:undefined;" onclick="javascript:Tips.add(this, event, 'Login!', { style: 'grouped' });">Vote</a>
				<a href="javascript:undefined;" onclick="javascript:Tips.add(this, event, 'Login!', { style: 'grouped' });">Comment</a>
			</p>
			<a name="documentation-advanced"></a>
			<h2>Advanced</h2>
			<p>
				There are a view more useful properties of the opentip class, that are not needed that often, but are quite useful.<br />
			</p>
			<h3>Debugging with Firebug or Safari</h3>
			<p>
				To set the opentip class to debuggin mode, just set Opentip.debugging = true; after including the opentip.js file.<br />
				If you have Firebug or Safari in developer mode, opentip will then output some debugging information.
			</p>
			<h3>Multiple Ajax links</h3>
			<p>
				This example is something I found useful in some situations.<br />
				Apply Opentip to multiple elements, to transform links to ajax requests.
			</p>
			<code><?php echo htmlentities('<div id="links">
  <a href="ajaxcontent.html">Link A</a>
  <a href="ajaxcontent.html">Link B</a>
  <a href="ajaxcontent.html">Link C</a>
</div>
<script type="text/javascript">
  $("links").select("a").invoke("addTip", { showOn: "click", ajax: true });
</script>'); ?></code>
			<p>The result:</p>
			<p id="theLinks">
				<a href="ajaxDemo.php">Link A</a>
				<a href="ajaxDemo.php">Link B</a>
				<a href="ajaxDemo.php">Link C</a>
			</p>
			<script type="text/javascript">
				$("theLinks").select("a").invoke("addTip", { showOn: "click", ajax: true });
			</script>
			<h3>Setting content as function</h3>
			<p>
				This avoids unnecessary element creation at the creation of a tooltip.<br />
				If the content is set as a function, this function will be called when the tooltip is first shown, and the result is used as content.<br />
				Example:
			</p>
			<code>var myObject = {
  buildTooltipElements: function(tip) {
    return Builder.node(
      'div',
      'This is the content of tooltip #' + tip.id
    );
  },
  setupTooltip: function() {
    $('someElement).addTip(this.buildTooltipElements);
    <span class="comment">// Don't forget to use .bind(this) if necessary.</span>
  }
};</code>
		<a name="documentation-additionalInformation"></a>
		<h2>Additional information</h2>
		<p>
			To prevent surprises, and to fully list all of opentip features, here is some additional information about the opentip class:
		</p>
		<ul>
			<li>Opentip automatically focuses the first input/textarea found in the content when shown.</li>
			<li>When you call .hide() on a tip manually, you can pass along the afterFinish parameter, which is a function that will be called after the hideEffect has finished.</li>
			<li>Opentips get repositioned when the browser gets resized.</li>
			<li>
				YES! Some of the stuff is based on CSS3. But only the eye candy stuff, like rounded corners and box shadows.<br />
				If you can't live with that... well contact me. If I have a good day I'll implement some workarounds.
			</li>
		</ul>
		</div>
	</div>
	<div id="footer">
		Graphics: <strong>Tjandra Mayerhold</strong>, Programming: <strong>Matthias Loitsch</strong><br /><br />
		Thanks to:<br /><br />
		&nbsp;&nbsp;<em>Florian Loitsch</em> for teaching me all I know about Javascript.<br />
		&nbsp;&nbsp;<em>Hannah Mayr</em> for understanding and encouraging my enthusiasm in open source projects.<br />
		<br />
		Licenced under the <strong>MIT</strong> Licence.<br /><br />
		Copyright (c) 2009, Matthias Loitsch<br />
		<br />
		Permission is hereby granted, free of charge, to any person obtaining a copy
		of this software and associated documentation files (the "Software"), to deal
		in the Software without restriction, including without limitation the rights
		to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
		copies of the Software, and to permit persons to whom the Software is
		furnished to do so, subject to the following conditions:<br /><br />

		The above copyright notice and this permission notice shall be included in
		all copies or substantial portions of the Software.<br /><br />

		THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
		IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
		FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
		AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
		LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
		OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
		THE SOFTWARE.
	</div>
</div>

</body>
</html>
