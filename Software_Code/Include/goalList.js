

/*Checks  if array is stored in localStorage and then either creates it or
  adds new item to the already exisitng array */
function checkArrayExists(itemName){

  var pageTitle = document.title;
  itemName= itemName+":"+pageTitle;

  //Checks if the array exists, if not then creates it and populates
  if (localStorage.getItem("goals") === null) {
    localStorage["goals"] = JSON.stringify(itemName);
  }
  else{
    addToList(itemName);
  }
}

/* Checks if the item is already in the array, if not then adds it to the list in
  localStorage */
function addToList(itemName){
  //Makes it an array
  var storedPages = JSON.parse(localStorage["goals"]);

  // If the  item is not in the array then add it
  if(!storedPages.includes(itemName)){
    storedPages = storedPages + "," + itemName;
    localStorage["goals"] = JSON.stringify(storedPages);
  }
}

/* Gets the array as input and then prints the html code onto the document */
function printListTable(storedPages){

  const pageSplit = storedPages.split(":");


  var listTable = "<tr><th scope='row'>" + pageSplit[1] + "</th> <td>" + pageSplit[0]+ "</td><td id='deleteEntry'> <span id='"+ storedPages +"' type='button' onclick='deleteItem(this.id);'> X </span> </td></tr>";
  document.write( listTable );
}

/*
  Upon click the button will send it's ID to this function, that ID has the same name as
  the item in the localStorage array, there that ID can be used to delete it from there.
*/
function deleteItem(itemToDelete){

  //Gets the items from localStorage and makes a var to look for.
  var storedPages = JSON.parse(localStorage["goals"]);
  temp = ","+itemToDelete;

  //replaces the ID (item to delete) with nothing
  storedPages = storedPages.replace(temp,'');
  localStorage["goals"] = JSON.stringify(storedPages);

  //When deleting last item, clear localStorage
  if(itemToDelete == storedPages){
    localStorage.clear();
  }
  location.reload(); //Reloads the page
}

/* Deletes the whole list */
function delList(){
  localStorage.clear();
  location.reload(); //Reloads the page
}


/*
  Gets the inner html items of a tag. Then it saves those items in a new variable surrounded by
  html tags (basically creates a new html file in that string) and then allows the user to print them.

  Code gathered from:
   - Quora by the user 'Yogesh Chaudhari'
   - Link to post: https://qr.ae/pGEiOK
*/
function printPDF(listOfGoals){

  // Gathers the items to be printed.
  var listElements = document.getElementById(listOfGoals).innerHTML;
  var oldPage = document.body.innerHTML;

  //Puts the page into a string to be printed
  document.body.innerHTML =
    "<html><head><title></title></head><body>" +
    listElements + "</body>";

  window.print(); //pulls up the print options

  //Restores the original page
  document.body.innerHTML = oldPage;
  location.reload(); //Reloads the page
}
