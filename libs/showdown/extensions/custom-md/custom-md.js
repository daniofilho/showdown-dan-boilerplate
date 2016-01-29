/* Funções para auxiliar na exibição deste manual - Dânio Filho */
//
//  Google Prettify
//  A showdown extension to add Google Prettify (http://code.google.com/p/google-code-prettify/)
//  hints to showdown's HTML output.
//

(function (extension) {
  'use strict';

  if (typeof showdown !== 'undefined') {
    // global (browser or nodejs global)
    extension(showdown);
  } else if (typeof define === 'function' && define.amd) {
    // AMD
    define(['showdown'], extension);
  } else if (typeof exports === 'object') {
    // Node, CommonJS-like
    module.exports = extension(require('showdown'));
  } else {
    // showdown was not found so we throw
    throw Error('Could not find showdown library');
  }

}(function (showdown) {
   'use strict';
   showdown.extension('custommd', function () {
      return [{
         type    : 'html',
         filter: function (source) {
            var replaceMe,
                replaced;

            replaceMe = replaced = "";

               //Centralizar open
                  replaceMe = "!C";
                  replaced  = "<span class='center'>";
                  source    = source.replaceAll(replaceMe, replaced);

                  //Centralizar close
                     replaceMe = "!\/C";
                     replaced  = "</span>";
                     source    = source.replaceAll(replaceMe, replaced);

            return source;
         }
      }];
   });
}));

String.prototype.replaceAll = function(de, para){
    var str = this;
    var pos = str.indexOf(de);
    while (pos > -1){
		str = str.replace(de, para);
		pos = str.indexOf(de);
	}
    return (str);
}
