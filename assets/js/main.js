//Function called on front end, converts the specified md file into html
function loadMD() {

   //The file choosen
   var e = document.getElementById("select_mdFile");
   var theFile = e.options[e.selectedIndex].value;

   //Showdown
   var converter = new showdown.Converter({extensions: ['prettify', 'custom-showdown-extension']});

   //Customize Options Here
   converter.setOption('noHeaderId', 'true');
   converter.setOption('tables',     'true');

   //Assincronous function to get the file
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
     if (xhttp.readyState == 4 && xhttp.status == 200) {

        //convert
        var html = converter.makeHtml(xhttp.responseText);

        //Prints the HTML on the target div
        document.getElementById("md_content_here").innerHTML = html;

        //Prettity with Google Code Prettify
        prettyPrint();
     }
   };
   xhttp.open("GET", theFile, true);
   xhttp.send();

}
