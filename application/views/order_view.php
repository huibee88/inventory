
	<div class="container order-view row" style="max-width: 3600px;">
	
		<!-- add order form -->
		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Class Modal"> &times; </span>
			<form id="orderform" action= "<?=base_url()?>Order/addOrder" method="post" class="modal-content" enctype="multipart/form-data">
				<div class="contact-title" style="text-align: center; width: 100%;">
					<h2>Customer Order Details</h2>
				</div>

				<div class="container report-form">
					<label for="cname"><b>Customer Name: </b></label><br>
					<input type="text" name="cname">
					<br>
					<label for="orderdate"><b>Order Date</b></label><br>
					<input type="date" name="orderdate" id="orderdate">
					<label for="product"><b>Product</b></label>
					<select name="product" id="product">
						<option value="" disabled="disabled" selected="selected">Please Select</option>
						<option value="Robusta"> Robusta</option>
						<option value="Excelsa"> Excelsa</option>
						<option value="Liberica"> Liberica</option>
						<option value="Arabica"> Arabica</option>
					</select>
					<br>
					<br>
					<label for="quantity"><b>Quantity</b></label>
					<input type="number" id="quantity" name="quantity" min="1" max="99">

					<div>
						<button type="submit" class="cancelbtn"> Add </button>
					<span><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"> Cancel </button></span>
					</div>
				</div>
			</form>
		</div>

		<div class="customer-title" style="text-align: center; width: 100%;">
			<h2>Customer Orders</h2>
		</div>

		<div class="container" style="margin-left:100px;">
			<div class="clearfix">
				<button type="button" class="signupbtn" onclick="document.getElementById('id01').style.display='block'"><b>Add Order</b></button>
				<button type="button" class="signupbtn" onclick="document.getElementById('id02').style.display='block'"><b>Order Report</b></button>
			</div>
			<br>
			<div>
				<table id="myTable">
					<thead>
					  <tr>
					    <th>Date</th>
					    <th>Customer Name</th>
					    <th>Product</th>
					    <th>Quantity</th>
					    <th>Invoice</th>
					  </tr>
					 </thead>
					 <tbody>
					   <?php 
           	 foreach($Order as $row){?>
                <tr>
                  <td><?php echo $row['odate'] ?></td>
                  <td><?php echo $row['cname'] ?></td>
                  <td><?php echo $row['product'] ?></td>
                  <td><?php echo $row['oquantity'] ?></td>
                  <td><?php echo $row['invoiceno'] ?></td>  
                </tr>
                <?php  }?>
            </tbody>
				</table>
		</div>
	</div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

<style>
*{box-sizing: border-box}

.order-view{
	margin-top: 100px;
	margin-bottom: 50px;
}

label{
	padding-right: 10px;
}


/* Full-width input fields */
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
.order-view button{
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

.order-view .clearfix .signupbtn button{
	border-color: #3d3934;
	background-color: #e0d9d1;
	color: #3d3934;
}

.order-view .order{
	width: 68%;
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

.order-view button:hover{
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

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px){
	.order-view .order .cancelbtn, .signupbtn{
		width: 30%;
	}

	.order-view .image img{
		size: 20%;
	}

}
</style>