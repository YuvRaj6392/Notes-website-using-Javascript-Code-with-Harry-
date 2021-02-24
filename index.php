<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <title>Notes</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iNotes</a>
 <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
</nav>
<div class="container my-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Write your notes here:-</h5>
<div class="mb-3">
  <textarea class="form-control" rows="3" id="addtxt"></textarea>
</div>
    <button class="btn btn-primary" id="addbtn">Add Notes</a>
  </div>
</div>
<h1 class="my-2">Notes</h1>
<hr>
<div id="notes" class="row container-fluid">
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#addbtn").click(function(){
let addtxt=document.getElementById("addtxt");
let notes=localStorage.getItem("notes");
if(notes==null)
{
notesobj=[];
}
else
{
notesobj=JSON.parse(notes);
}
notesobj.push(addtxt.value);
localStorage.setItem("notes",JSON.stringify(notesobj));
addtxt.value="";
shownotes();
});
});
function shownotes(){
let notes=localStorage.getItem("notes");
if(notes==null)
{
notesobj=[];
}
else
{
notesobj=JSON.parse(notes);
}
let html="";
for(var i=0;i<notesobj.length;i++)
{
html+=`<div class="card my-2 mx-2" style="width: 18rem;">
 <div class="card-body">
    <h5 class="card-title">Note ${i+1}</h5>
    <p class="card-text">${notesobj[i]}</p>
    <button  class="btn btn-primary" id="delete">Delete</button>
  </div>
</div>`;
}
let no=document.getElementById("notes");
if(notes.length!=0)
{
no.innerHTML=html;
}
}
</script>
</html>