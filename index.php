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

  <!--
  For facebook like button, commented out for xhtml validation.
  Facebook still processes it.
  <meta property="og:title" content="Opentip"/>
  <meta property="og:site_name" content="www.opentip.org"/>
  -->
  <style type="text/css">
    @import "http://src.opentip.org/opentip.css?v=2";
    @import "http://src.opentip.org/opentip.contentDesign.css?v=2";
    @import "stylesheets/general.css";
  </style>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.2/scriptaculous.js"></script>

  <script type="text/javascript" src="http://src.opentip.org/opentip.js?v=2"></script>
<!--  <script type="text/javascript" src="http://unstable.opentip.org/opentip.js"></script>-->

  <script type="text/javascript">
    Opentip.styles.codeSample = {
      showOn: 'click',
      hideOn: 'click',
      targetJoint: [ 'right', 'middle' ],
      tipJoint: [ 'left', 'middle' ],
      stem: true
    };
//     Opentip.debugging = true;
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
    <a href="./" class="logo"><span>Opentip</span></a>
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
            Tips.add('effectsDemo', 'This one fades in.',   { showEffect: 'appear',    showEffectDuration: 1, hideEffectDuration: 1, delay: 0,   target: true, stem: true, tipJoint: [ 'center', 'bottom' ], targetJoint: [ 'center', 'top' ] });
            Tips.add('effectsDemo', 'This one grows.',       { showEffect: 'grow', hideEffect: 'shrink',     showEffectDuration: 1, hideEffectDuration: 1, delay: 0.2, target: true, stem: true, tipJoint: [ 'left', 'middle' ], targetJoint: [ 'right',  'middle' ] });
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

    <?php include(dirname(__FILE__) . '/downloadButton.php'); ?>

    <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.opentip.org%2F&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:750px; height:35px;"></iframe>
    
    

    <div class="box">
      <h2>Implementation</h2>
      <p>
        Creating a tooltip is really easy.<br />
        The easiest way is to define the tooltip via element tags:
      </p>
      <code>&lt;div ot="<span class="string">Shown after 2 seconds.</span>" ot-delay="2.0"&gt;&lt;/div&gt;</code>
      <p>
        All options to define your tooltip can be passed like this. Just prefix them with ot- and use dashes (eg.: ot-show-effect="blindDown").
      </p>
      <p>
        Or you can define it in the element event (be sure to pass the <strong>event</strong>):
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
      <h2>Documentation</h2>
      <p>
        For further information, please read the <a href="documentation.php">full documentation</a>!<br />
        Have fun.
      </p>
    </div>


    <a id="contactLink" class="contact" name="contact" href="javascript:undefined">Contact me</a>
    <script type="text/javascript">
      
      var buildForm = function(tip) {
        var name, email, message;

        var submitForm = function() {
          tip.hide();
          var self = this;
          new Ajax.Request('sendMessage.php', {
              parameters: {
                name: name.getValue(),
                email: email.getValue(),
                message: message.getValue()
              },
              onSuccess: function(transport) {
                var content = transport.responseText;
                if (content) {
                  alert(content);
                } else {
                  self.reset();
                  alert('Thanks.');
                }
            }
          });
        }


        return Opentip.element('form', { action: 'javascript:undefined' }, [
          Opentip.element('label', 'Your name'),
          name = Opentip.element('input', { type: 'text' }, ''),
          Opentip.element('label', 'Your email'),
          email = Opentip.element('input', { type: 'text' }, ''),
          Opentip.element('label', 'Your message'),
          message = Opentip.element('textarea', {}, ''),
          Opentip.element('button', { type: 'submit' }, 'Send message')
        ]).observe('submit', submitForm);
      };
      
      $('contactLink').addTip(buildForm, { style: 'glass', stem: true, showOn: 'click', target: true, tipJoint: [ 'center', 'top' ], hideTrigger: 'closeButton' });
    </script>

    <a id="googleGroupsLink" class="contact" target="_blank" name="googleGroups" href="http://groups.google.com/group/opentip"><span>Google groups</span></a>

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
