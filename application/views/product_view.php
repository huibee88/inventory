<style>
    .popup {
    position: fixed;
    top: -200%;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: top 0.3s ease-in-out;
    }

    .popup form {
    background-color: white;
    padding: 20px;
    }

    .popup.show {
    top: 0;
    }

    .popup .container {
        height: 100%;
    }

    * Full-width input fields */
input[type=text], input[type=date], input[type=number], select{
    width: 68%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    display: flex;
}

input[type=text]:focus, input[type=date]:focus,, input[type=number]:focus, select:focus{
    background-color: #ddd;
    outline: none;
    float:left;
}

hr{
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button{
    background-color: #e0d9d1;
    color: #3d3934;
    border-color: #3d3934;
    padding: 14px 50px;
    margin: 8px 5px;
    cursor: pointer;
    font-size: 18px;
    opacity: 0.9;
    border-radius: 25px;

}

button{
    border-color: #3d3934;
    background-color: #e0d9d1;
    color: #3d3934;
}


table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

/*.vform button b{
    font-size: 10px;
}*/

.margin-section button:hover{
    opacity: 1;
}

/* Add padding to container elements */
.order-view .container {
    padding: 16px 50px;
    width: 100%;
}

/* Clear floats */
.order-view .clearfix::after{
    content: "";
    clear: both;
    display: table;
}


.order-view .image img{
    height: 350px; 
    float: centre; 
    margin: 100px 80px 0 0;
}
</style>


<!-- PopupForm section -->
<section class="PopupForm-section">
    <div id="popupForm" class="modal form-group popup d-flex align-items-center justify-content-center">
        <div class="container">
            <form id="addProduct" action="<?=base_url()?>Product/addProduct" method="post"  class = "vform"  enctype="multipart/form-data">

                <!-- Form fields -->
                <div class="row">
                    <div class="col-6">
                        <label for="pName">Product Name: </label>
                        <input class="form-control" type="text" name="pName" required>
                        <label for="sku">SKU</label>
                        <input class="form-control" type="text" name="pSKU" required>
                        <label for="category">Category</label>
                        <select class="form-control" name="pCategory">
                            <option value="" selected>Please Select</option>
                            <optgroup label="beans">
                                <option value="Robusta">Robusta</option>
                                <option value="Excelsa">Excelsa</option>
                                <option value="Liberica">Liberica</option>
                                <option value="Arabica">Arabica</option>
                            </optgroup>
                            <optgroup label="milk">
                                <option value="almond">Almond Milk</option>
                                <option value="oat">Oat Milk</option>
                            </optgroup>
                            <optgroup label="sweetener">
                                <option value="syrup">Syrup</option>
                                <option value="chocolate">Chocolate</option>
                                <option value="caramel">Caramel</option>
                            </optgroup>
                        </select>
                        <label for="Description">Product Description</label>
                        <textarea class="form-control" rows="3" type="text" name="pDescription" required></textarea>
                        <label for="supplier">Supplier</label><input class="form-control" type="text" name="pSupplier" required>
                        <label for="supplier-id">Supplier ID</label><input class="form-control" type="text" name="psID" required>
                        <label for="purchase-price">Purchase Price</label> <input class="form-control" type="text" name="ppPrice" required>
                        <label for="sale-price">Sale Price</label><input class="form-control" type="text" name="psPrice" required>
                        <label for="available-stock">Available Stock</label><input class="form-control" type="text" name="pStock" required>
                        <label for="reorder-point">Reorder Point</label><input class="form-control" type="text" name="prPoint" required>
                        <label for="location">Location</label><input class="form-control" type="text" name="pLocation" required>
                        <label for="last-updated">Last Updated</label><input class="form-control" type="text" id="dateInput" readonly>          
                    </div>
                    <div class="col">
                        <div class="row">
                            <label class="form-label" for="image-directory">Select Image:</label>
                            <input type="file" class="form-control" name="pImg" id="imageUpload" accept="image/*" onchange="previewImage(event)">
                        </div>
                        <div class="row">
                             <!-- Submit button -->

                            <button class="signupbtn" type="submit" style="margin:20px;">Add Product</button>
                            <button class="signupbtn" id= closeButton style="margin:20px;">Cancel</button>
                        </div>
                        
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="PopupForm-section">
    <div id="popupForm2" class="modal form-group popup d-flex align-items-center justify-content-center">
        <div class="container" style="background-color: #FFF">
            <button class="signupbtn" id= closeButton2 style="margin:20px;">Close</button>
            <div class='report'>
                <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
            </div>
        </div>
    </div>
</section>
<!-- Table section -->
<section class="margin-section" style="margin-top: 100px">
    <div class="contact-title" style="text-align: center; width: 100%;">
        <h2>Product Details</h2>
    </div>
</section>

<!-- Button section -->
<section class="margin-section" >
    <div class="container clearfix r-btn">
        <button id= openButton type="button" class="signupbtn"><b>New Product</b></button>
        <button id= openButton2 type="button" class="signupbtn"><b>Product Report</b></button>
    </div>
    
</section>

    
<!-- Table section -->
<section class="inventory-section" >
    <div class="container">
        <table class="table"  id="myTable2">
            <thead>
                <tr>
                    <td class="tg-0lax">ID</td>
                    <td class="tg-0lax">Name</td>
                    <td class="tg-0lax">SKU</td>
                    <td class="tg-0lax">Category</td>
                    <td class="tg-0lax">Supplier</td>
                    <td class="tg-0lax">Supplier ID</td>
                    <td class="tg-0lax">Purchase Price</td>
                    <td class="tg-0lax">Sale Price</td>
                    <td class="tg-0lax">Available Stock</td>
                    <td class="tg-0lax">Reorder Point</td>
                    <td class="tg-0lax">Location</td>
                    <td class="tg-0lax">Last Updated</td>
                    <td class="tg-0lax">Action</td>
                </tr>
            </thead>
            <tbody>
            <?php 
            if (is_array($LatestInventory) || is_object($LatestInventory)) {
            foreach($LatestInventory as $row){?>
                <tr>
                        <td class="tg-0lax"><?php echo $row['id'] ?></td>
                        <td class="tg-0lax"><?php echo $row['name'] ?></td>
                        <td class="tg-0lax"><?php echo $row['sku'] ?></td>
                        <td class="tg-0lax"><?php echo $row['category'] ?></td>
                        <td class="tg-0lax"><?php echo $row['supplier'] ?></td>
                        <td class="tg-0lax"><?php echo $row['sID'] ?></td>
                        <td class="tg-0lax"><?php echo $row['pPrice'] ?></td>
                        <td class="tg-0lax"><?php echo $row['sPrice'] ?></td>
                        <td class="tg-0lax"><?php echo $row['stock'] ?></td>
                        <td class="tg-0lax"><?php echo $row['rPoint'] ?></td>
                        <td class="tg-0lax"><?php echo $row['location'] ?></td>
                        <td class="tg-0lax"><?php echo $row['date'] ?></td>
                        <td class="tg-0lax">
                        <a href="<?php echo site_url('Product/editProduct/'.$row['id']); ?>"><button class="btn" style="color: teal; margin: 5px;" onclick="">Edit</button></a>
                            <a href="<?php echo site_url('Product/delete/'.$row['id']); ?>"><button class="btn"  style="color: red; margin: 5px;">Delete</button></a>
                                            
                        </td>
                </tr>
                <?php  }
            } else {
                  echo "No data available."; // Display an error message or handle the absence of data as needed
                }?>
            </tbody>
                
        </table>
    </div>
</section>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

<script src="<?=base_url()?>public/js/jquery-3.2.1.min.js"></script>
<script>
    const popupForm = document.getElementById('popupForm');
    const popupForm2 = document.getElementById('popupForm2');

    const openButton = document.getElementById('openButton');
    const closeButton = document.getElementById('closeButton');

    // Function to open the pop-up form
    function openForm() {
        popupForm.classList.add('show');
    }

    // Function to close the pop-up form
    function closeForm() {
        popupForm.classList.remove('show');
    }

    function openForm2() {
        popupForm2.classList.add('show');
        drawGraph();
    }
    function closeForm2() {
        popupForm2.classList.remove('show');
    }

    // Event listeners
    openButton.addEventListener('click', openForm);
    closeButton.addEventListener('click', closeForm);
    openButton2.addEventListener('click', openForm2);
    closeButton2.addEventListener('click', closeForm2);

    // Create a new Date object
    const currentDate = new Date();

    // Get the individual components of the date
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth() + 1;
    const day = currentDate.getDate();

    // Format the date as desired
    const formattedDate = `${year}-${month < 10 ? '0' + month : month}-${day < 10 ? '0' + day : day}`;

    // Set the value of the input field
    const dateInput = document.getElementById('dateInput');
    dateInput.value = formattedDate;

    function previewImage(event) {
        var reader = new FileReader();
        var imagePreview = document.getElementById('imagePreview');
        if (event.target.files && event.target.files[0]) {
        reader.onload = function() {
            imagePreview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
        } else {
        imagePreview.src = 'default-image.jpg'; // Set the default image source
        }
    }

    function generateRandomColor(){
    let maxVal = 0xFFFFFF; // 16777215
    let randomNumber = Math.random() * maxVal; 
    randomNumber = Math.floor(randomNumber);
    randomNumber = randomNumber.toString(16);
    let randColor = randomNumber.padStart(6, 0);   
    return `#${randColor.toUpperCase()}`
}

    function drawGraph(){
        var xData = [];
        var yData = [];
        var color = []

        <?php foreach($Report as $row) {?>
            xData.push('<?php echo $row['ProductName'] ?>');
            yData.push(<?php echo $row['Qty'] ?>);
            color.push(generateRandomColor())

    <?php } ?>
    
        new Chart("myChart", {
      type: "pie",
          data: {
            labels: xData,
            datasets: [{
                backgroundColor: color,
              data: yData
            }]
          },
          options: {
            title: {
              display: true,
              text: "Inventory Overview"
            }
          }
        });
    };
</script>
