<!DOCTYPE html>
<html lang="en-ca">

<head>
    <meta charset="utf-8">
    <title>Tota11y bookmarklet test</title>
    <meta name="viewport" content="width=device-width">
    <style>
        a.cta {
            margin: 1.5em auto;
            font-size: 2em;
            padding: 5px;
            border: 3px ridge goldenrod;
        }
    </style>
</head>
<h1>Babylon-flavoured Tota11y One-stop Turnkey Enterprise Visual Accessibility Checking Solution</h1>
<p><a href="https://brucelawson.co.uk/2021/accessibility-visualisation-with-tota11y-2/">Tota11y is a simple tool</a> to visualise the <a href="https://webaim.org/projects/million/#wcag">most widespread web accessibility errors</a> in a non overwhelmingly-techy
    way.</p>
<p>Drag this link to your Firefox/ Chromium/ Safari bookmarks bar:</p>
<a class=cta href="javascript:(function()%7Bvar tota11y%3Ddocument.createElement(%27SCRIPT%27)%3Btota11y.type%3D%27text/javascript%27%3Btota11y.src%3D%27https://totally.ops.babylontech.co.uk/tota11y.min.js%27%3Bdocument.getElementsByTagName(%27head%27)%5B0%5D.appendChild(tota11y)%3B%7D)()%3B">Tota11y</a>
<p><a href="https://github.com/babylonhealth/Tota11y/">See code on Github</a>.</p>
<h2>Version 1.1 ("Rusty trombone")</h2>
<p>New naming convention replaces <i>adjective+animal I've never eaten</i>. Version 1+ are <i>adjective+musical instrument I've never tried to play</i>.</p>
<ul>
    <li>Tweaked CSS to never transform text style. (whitehouse.gov was setting all labels to be uppercase)</li>
    <li>Main overlay now has scroll:auto</li>
</ul>

<h2>Version 1! ("Justifiably melancholic otter")</h2>
<p>Tarted up the design so it has a nice border and will show up against dark cookie banners etc.</p>
<h2>Version 0.7 ("Psychopathic tapeworm")</h2>
<ul>
    <li>Contrast checker now ignores transparent (therefore, invisible) text, eg on Amazon, Guardian</li>
</ul>
<h2>Version 0.6 ("Concupiscent hedgehog")</h2>
<ul>
    <li>Empty elements plugin: downgrade empty <code>p</code> and multiple <code>br</code> elements to warning (was error), as they may indicate shonky CSS but aren't a disaster for a11y</li>
    <li>Add tests for empty nav, header, main, aside, footer, figcaption. These might be announced to screen reader users (but will be empty) and justifiably make people grumpy.</li>
    <li>When hovering over a tota11y label, max its z-index in case it is obscured by a nearby label in busy pages.
    </li>
    <li>Make the menu responsive when screen is zoomed to 200%</li>
</ul>
<h2>Version 0.5 ("Insouciant cormorant")</h2>
<ul>
    <li>A criminally ugly test to suppress reporting contrast violations if text is visually hidden using the common <a href="https://www.a11yproject.com/posts/2013-01-11-how-to-hide-content/">clip pattern</a> which we use on Babylon. This is to reduce false
        positives which erode trust in the test.</li>
    <li>Feelthy hack to fix clean-up bug in new Titles module</li>
</ul>
<h2>Version 0.4 ("Sultry panda")</h2>
<ul>
    <li>New Titles module to show missing titles on iframes (error), and warnings for superfluous titles on other things erroneously put there to placate the false idols of Search Engine Optimists (see <a href="https://www.24a11y.com/2017/the-trials-and-tribulations-of-the-title-attribute/">The Trials and
			Tribulations of the Title Attribute</a>)</li>
</ul>
<h2>Version 0.3 ("Mellifluous ostrich")</h2>
<ul>
    <li>Correct calculation of contrast ratio in the contrast module to take account of boldness of text and not just rely on font-size. (Thanks <a href="https://searchfox.org/mozilla-central/source/devtools/shared/accessibility.js#23">Mozilla dev
			tools</a>!)</li>
</ul>
<h2>Version 0.2 ("Uninhibited gibbon")</h2>
<ul>
    <li>New module to highlight empty elements, eg heading and paragraphs, which was a constant bugbear</li>
    <li>Tweaked img/alt module to ask users to check accuracy of alt text (rather than perhaps falsely-reassure that presence of alt text is actually useful)</li>
</ul>
<h2>Version 0.176303987 ("Lachrymose rhinoceros")</h2>
<ul>
    <li>Add links to Babylon DNA guidance where applicable</li>
    <li>Split out modules into 'designers'/ content editors and Developers (was 'Experimental')</li>
</ul>
<h2>Version 0.1 ("Obstreperous lemur")</h2>
<ul>
    <li>New module to expose HTML5 landmarks (footer, header etc) and explicitly set ARIA roles (but not those that are implicit, because that's not as useful for diagnosing coder errors)</li>
    <li>change the name of "screenreader wand", which over-promises (screen readers often give other info about form fields, e.g. required). Don't want to suggest that Tota11y replaces testing with Assistive Technologies. added exposure of value attribute
        on
        <code>input type=submit</code> fields (as that is what gets exposed and wasn't being reported). Add value of
        <code>aria-describedby</code> attributes as that is also passed to AT, especially as <a href="https://developer.paciellogroup.com/blog/2014/12/using-aria-describedby-to-provide-helpful-form-hints/">hints/
			instructions on form fields</a>
    </li>
</ul>

<h2>Blah blah</h2>
<p>Forked from <a href="https://github.com/Khan/tota11y">Khan Academy</a> (who seem to have abandoned it) by <a href="https://twitter.com/brucel">Bruce</a> for <a href="https://babylonhealth.com/">Babylon Health</a>. Contains <a href="https://www.mozilla.org/en-US/MPL/2.0/">MPL 2.0 code</a>    from Firefox devtools (module plugins/contrast/index.js).
</p>
