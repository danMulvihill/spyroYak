<article>
<h1>Unicode </h1>
	
<p>Computers have a convenient and efficient system for storing and displaying commonly-used characters like letters, numbers, mathematical symbols, and dingbats. Unlike images that are rendered pixel by pixel, characters are stored as 8 or 16-bit codes that the computer looks up and displays as you press the keys on the keyboard or type the <a href="http://entity-lookup.leftlogic.com/">character's numeric code</a>. Earlier versions of this system (like ASCII) used 7 bits (or on/off switches) which allowed for 128 characters. This was latter extended to 8 bits which allows for an additional 128 characters or a total of 256 characters. Hence this is why 1 byte equals 8 bits. Each character you type on a computer equaled 1 byte of storage. This was enough for all the characters on early typewriters and typesetters and some unique letter forms used in non-English European languages, but was not enough for non-Latin scripts, many math symbols, and certainly not enough for the thousands of symbols and characters used in Chinese and other East Asian languages. Unicode was first developed in the 1980s to extend support for 65,535 characters. Unicode requires 16 bits or 2 bytes. Although this doubles the amount of storage needed, it's still much less than that required for a comparable image.</p>
<p>The lists below include some of the alphabets, scripts, and writing systems commonly used. Choose a category and then a specific script to display a list of characters and their numeric code. The first number is the hexadecimal code followed by the decimal code (in brackets) and then the symbol. Whether or not you see the character is going to depend on your computer's operating system and the browser used. Not all characters are supported by all computers and browsers (and other software applications like word processors) may not display every character. For more information, see the <a href="http://unicode.org">Unicode Consortium website</a>.</p>
<h1>Display a Unicode (or ASCII) Chart</h1>
</article>
	<div id="buttons">
	<fieldset>
		<button onclick="openSec('west')">Latin Alphabet</button>

		<button onclick="openSec('east')">Eastern Alphabets</button>
		<button onclick="openSec('brahmi')">Brahmic Alphabets</button>
		<button onclick="openSec('other')">Other Alphabets</button>
		<button onclick="openSec('dingbats')">Symbols, Shapes & Dingbats</button>
		<button onclick="openSec('cjk')">CJK Ideographs</button>
               <button onclick="displayChars(0x0020,0x2e7f)">Display the first 11,903 characters</button>
                <button onclick="displayChars(0x2e80,0xFFFF)">Display Everything Else (Warning: this could take a while)</button>
	</fieldset>
	<fieldset id="west" style="display:none" ><legend>Latin (Basic ASCII & 2nd byte extensions)</legend>
		<button onclick="displayChars(32,127)">7-bit ASCII</button>
		<button onclick="displayChars(0x0080,0x00FF)">8-bit ASCII Supplement</button>
		<button onclick="displayChars(0x0100,0x017F)">Latin Extended-A </button>
                <button onclick="displayChars(0x0180,0x024F)">Latin Extended-B</button>
		<button onclick="displayChars(0x0250,0x036F)">International Phonetic Alphabet</button>
                
		<button onclick="displayChars(0x1e00,0x1eff)">Latin Extended Additional</button>
                <button onclick="displayChars(0x2c60,0x2c7f)">Extended-C</button>
                <button onclick="displayChars(0xa720,0xa7ff)">Extended-D</button>
                <button onclick="displayChars(0xab30,0xab6f)">Extended-E</button>
	</fieldset>
	
	<fieldset id="east" style="display:none"><legend>Eastern European & Middle Eastern alphabets</legend>
		<button onclick="displayChars(0x0370,0x03FF)">Greek</button>
		<button onclick="displayChars(0x1f00,0x1fff)">Greek Extended</button>
		<button onclick="displayChars(0x0400,0x04ff)">Cyrillic</button>
		<button onclick="displayChars(0x0530,0x058f)">Armenian</button>
		<button onclick="displayChars(0x0590,0x05ff)">Hebrew</button>
		<button onclick="displayChars(0xfb00,0xfb4f)">Alphabetic Presentation Forms</button>
		<button onclick="displayChars(0x0600,0x06ff)">Arabic</button>
		<button onclick="displayChars(0xfb50,0xfefe)">Arabic Presentation Forms</button>
		<button onclick="displayChars(0x0700,0x074f)">Syriac</button>
		<button onclick="displayChars(0x0780,0x07bf)">Thaana</button>
		<button onclick="displayChars(0x10a0,0x10ff)">Georgian</button>
		<button onclick="displayChars(0x1200,0x137F)">Ethiopic</button>
	</fieldset>
	<fieldset id="brahmi" style="display:none"><legend>Brahmi-derived alphabets</legend>
		<button onclick="displayChars(0x0900,0x097F)">Devanagari</button>
		<button onclick="displayChars(0x0980,0x09ff)">Bengali</button>
		<button onclick="displayChars(0x0A00,0x0a7f)">Gurmukhi</button>
		<button onclick="displayChars(0x0b00,0x0b7f)">Oriya</button>
		<button onclick="displayChars(0x0B80,0x0bff)">Tamil</button>
		<button onclick="displayChars(0x0c00,0x0c7f)">Telugu</button>
		<button onclick="displayChars(0x0c80,0x0cff)">Kannada</button>
		<button onclick="displayChars(0x0d00,0x0d7f)">Malayalam</button>
		<button onclick="displayChars(0x0d80,0x0dff)">Sinhala</button>
		<button onclick="displayChars(0x0e00,0x0e7f)">Thai</button>
		<button onclick="displayChars(0x0e80,0x0eff)">Lao</button>
		<button onclick="displayChars(0x0f00,0x0fff)">Tibetan</button>
		<button onclick="displayChars(0x1000,0x109f)">Myanmar</button>
		<button onclick="displayChars(0x1780,0x17ff)">Khmer</button>
		
	</fieldset>
	<fieldset id="other" style="display:none"><legend>Other alphabets</legend>
		
		<button onclick="displayChars(0x1100,0x11ff)">Hangul Jamo</button>
		<button onclick="displayChars(0x3130,0x318f)">Hangul Compatibility Jamo</button>
		<button onclick="displayChars(0x1380,0x13ff)">Cherokee</button>
		<button onclick="displayChars(0x1680,0x169f)">Ogham</button>
		<button onclick="displayChars(0x1800,0x18af)">Mongolian</button>
		<button onclick="displayChars(0x2800,0x28FF)">Braille Patterns</button>
	
	</fieldset>
	<fieldset id="dingbats" style="display:none"><legend>Symbols, Shapes and Dingbats</legend>
		<button onclick="displayChars(0x2000,0x206f)">General Punctuation</button>
		<button onclick="displayChars(0x2070,0x209f)">Superscripts and Subscripts</button>
		<button onclick="displayChars(0x20A0,0x20cf)">Currency Symbols</button>
		
		<button onclick="displayChars(0x2100,0x218f)">Number Forms</button>
		<button onclick="displayChars(0x2190,0x21ff)">Arrows</button>
		<button onclick="displayChars(0x2200,0x22ff)">Mathematical Operators</button>
		<button onclick="displayChars(0x2300,0x23ff)">Miscellaneous Technical</button>
		<button onclick="displayChars(0x2400,0x243f)">Control Pictures</button>
		
		<button onclick="displayChars(0x2460,0x24ff)">Enclosed Alphanumerics</button>
		<button onclick="displayChars(0x2500,0x257f)">Block Elements</button>
		<button onclick="displayChars(0x25A0,0x25ff)">Geometric Shapes</button>
		<button onclick="displayChars(0x2600,0x26ff)">Miscellaneous Symbols</button>
		<button onclick="displayChars(0x2700,0x27bf)">Dingbats</button>
		
	</fieldset>
	<fieldset id="cjk" style="display:none"><legend>Chinese, Japanese, Korean Ideographs & Syllabaries</legend>
		<button onclick="displayChars(0x2e80,0x2eff)">CJK Radicals Supplement</button>
		<button onclick="displayChars(0x2f00,0x2fdf)">Kangxi Radicals</button>
		
		<button onclick="displayChars(0x3000,0x303f)">CJK Symbols and Punctuation</button>
		<button onclick="displayChars(0x3040,0x309f)">Hiragana</button>
		<button onclick="displayChars(0x30A0,0x30ff)">Katakana</button>
		<button onclick="displayChars(0x3100,0x312f)">Bopomofo</button>
		
		<button onclick="displayChars(0x3190,0x319f)">Kanbun</button>
		<button onclick="displayChars(0x31A0,0x31bf)">Bopomofo Extended</button>
		<button onclick="displayChars(0x3200,0x32ff)">Enclosed CJK Letters and Months</button>
		<button onclick="displayChars(0x3300,0x33ff)">CJK Compatibility</button>
		<button onclick="displayChars(0x3400,0x4db5)">CJK Unified Ideographs Extention A</button>
		<button onclick="displayChars(0x4e00,0x9fff)">CJK Unified Ideographs</button>
		<button onclick="displayChars(0xA000,0xA48F)">Yi Syllables</button>
		<button onclick="displayChars(0xA490,0xA4cf)">Yi Radicals</button>
		<button onclick="displayChars(0xAC00,0xD7A3)">Hangul Syllables</button>
		
		
		<button onclick="displayChars(0xf900,0xfaff)">CJK Compatibility Ideographs</button>
		
		
		
		<button onclick="displayChars(0xfe30,0xfe4f)">CJK Compatibility Forms</button>
		<button onclick="displayChars(0xfe50,0xfe6f)">Small Form Variants</button>
		
	
		<button onclick="displayChars(0xff00,0xffef)">Halfwidth and Fullwidth Forms</button>
		

	</fieldset>
	</div>
	<div id="unicodeOutput"></div>