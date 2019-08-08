/*
 *  Copyright Information
 *  @copyright: 2019 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */

!function(){"use strict";tinymce.PluginManager.requireLangPack("hr","de");var n=tinymce.util.Tools.resolve("tinymce.PluginManager"),t=function(n){n.addCommand("InsertHorizontalRule",function(){n.execCommand("mceInsertContent",!1,"<hr />")})},o=function(n){n.addButton("hr",{icon:"hr",tooltip:"Horizontal line",cmd:"InsertHorizontalRule"}),n.addMenuItem("hr",{icon:"hr",text:"Horizontal line",cmd:"InsertHorizontalRule",context:"insert"})};n.add("hr",function(n){t(n),o(n)})}();