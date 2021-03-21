
var links = document.querySelectorAll('a'); 
// Selects All the attributes having 'a' tag
//i.e <a href=".."... ></a> and store them in a array list


for(var i=0;i<links.length;i++)
    console.log(links[i].href); 
// iterate over each element of the list and display its 'href' property .. which is supposed to be a link