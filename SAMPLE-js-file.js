// START





// SAMPLE SCROLLING NEWS FOR A .JS FILE NON-FLOATING


document.write('<table cellpadding="2" cellspacing="0" border="0" style="border: #996600 1px solid; background-color: #F0F0F0;COLOR: #996600; FONT: 13px arial, sans-serif; font-weight: bold;"><tr><td align="center">');
document.write('JS Sample<br>');
document.write('</td></tr><tr><td>');
document.write('<iframe id="NewsWindow" src="news_win.htm" width="150" height="204" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" style="border: #000000 1px solid;"></iframe>');
document.write('</td></tr></table>');
document.write('<br><br>');

// END CODE 1







// FLOATING SAMPLE SCROLLING NEWS FOR A .JS FILE

document.write('<div id="IframeScroller" style="position:absolute; visibility:visible; right: 100px; top: 100px; z-index:3">');
document.write('<table cellpadding="2" cellspacing="0" border="0" style="border: #000000 1px solid; background-color: #996666;COLOR: #FFFFFF; FONT: 13px arial, sans-serif; font-weight: bold;"><tr><td align="center">');
document.write('Floating JS Sample<br>');
document.write('</td></tr><tr><td>');
document.write('<iframe id="NewsWindow" src="news_win.htm" width="150" height="204" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" style="border: #000000 1px solid;"></iframe><br>');
document.write('</td></tr></table>');
document.write('</DIV>');

// END CODE 2
