<html>
  <!-- This php file is used to easily alter the code across all pages but also to increase readability -->
  <script src="/Software_Code/Include/goalList.js"></script>

  <!-- Modal -->
  <div class="modal fade" id="goalListModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">List of your Items</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">Goal</th>
                <th scope="col">Item</th>
                <th scope="col" id="tableDeleteCol">Delete</th>
              </tr>
            </thead>
            <tbody>
              <script>
                /*Prints the table by: Getting the items from local storage, splitting them by
                the comma and storing them in an array */
                var storedPages = JSON.parse(localStorage["goals"]);
                const tempArray = storedPages.split(",");

                //For the # of items in the array
                tempArray.forEach((item, i) => {
                  printListTable(tempArray[i]);
                });
              </script>
            </tbody>
          </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="delList();">Delete All</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="printPDF('goalListModal');">Print</button>
        </div>
      </div>
    </div>
  </div>
</html>
