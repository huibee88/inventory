<!-- Warning Section -->
<section class="menu-section spad" >
    <div class="container">
        <div class= "row">
            <div class="col-lg-4 col-md-6">
                    <div class="menubutton" style="display: inline-block;">
                        <a href="<?=base_url()?>Product" target="_blank">
                            <ul class="card">
                                <li>
                                    <span>
                                    <img src="public/img/coffeeBean.png">
                                    <h3>Product</h3>
                                    </span>
                                </li>
                            </ul>
                        </a>
                    </div>
            </div>

            <div class="col-lg-4 col-md-6">
                    <div class="menubutton" style="display: inline-block;">
                        <a href="<?=base_url()?>Order" target="_blank">
                            <ul class="card">
                                <li>
                                    <span>
                                    <img src="public/img/order1.png">
                                    <h3>Order</h3>
                                    </span>
                                </li>
                            </ul>
                        </a>
                    </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="menubutton" style="display: inline-block;">
                    <a href="<?=base_url()?>Sales" target="_blank">
                        <ul class="card">
                            <li>
                                <span>
                                    <img src="public/img/salesReport.png">
                                    <h3>Sales Report</h3>
                                </span>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Notification section-->
<section class="noti-section">
    <div class="container">
        <div class="section-title underline-title">
            <h1>Notification</h1>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <img src="public/img/lowStock.png">
            </div>
            <div class="col-lg-9"> 
                <div class="low-stock-table">
                    <table>
                        <tr>
                            <th style="background: #bfb8ae; color:#3d3934"> Low Stock Item</th>
                            <th style="background: #bfb8ae; color:#3d3934"> </th>
                            <th style="background: #bfb8ae; color:#3d3934"> Item to receive</th>
                            <th style="background: #bfb8ae; color:#3d3934"> </th>
                        </tr>
                        <tr>
                            <td><h4>Arabica</h4></td>
                            <td><h6>remaining: <span style="color: red; font-weight: bold;">1/2 </span>cartoon</h6></td>
                            <td><h4>Oat Milk</h4></td>
                            <td><h6>quantity: 20 cartoons</h6></td>
                        </tr>
                        <tr>
                            <td><h4>Cold Brew Coffee</h4></td>
                            <td><h6>remaining: <span style="color: red; font-weight: bold;">1</span> cartoon</h6></td>
                            <td><h4>Robusta</h4></td>
                            <td><h6>quantity: 15 cartoons</h6></td>
                        </tr>
                        <tr>
                            <td><h4>Robusta</h4></td>
                            <td><h6>remaining: <span style="color: red; font-weight: bold;">1</span> cartoon</h6></td>
                            <td><h4>Arabica</h4></td>
                            <td><h6>quantity: 30 cartoons</h6></td>
                        </tr>
                    </table>   
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.menu-section h3{
    text-align: center;
    margin-bottom: 10px;
    color: #3d3934;
}

.menu-section .card li{
    list-style: none;
    width: 80%;
}

.section-title{
    height: 100%;
    font-family:sans-serif;
    text-align: center;
    margin-bottom: 80px;
    font-weight: 600;
    color: #3d3934;
}

.underline-title{
    width: 100%;
    font-family: 'Saira Condensed', sans-serif;
    border-bottom: 5px solid #3d3934;
    margin-top: -50px;
    padding-bottom: 20px;
}

.noti-section ul li{
    padding-bottom: 9px;
    padding-top: 9px;
}

.low-stock-table table{
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
    padding-top: 4px;
    padding-bottom: 4px;
    border: 1px solid #3d3934;
}

.low-stock-table tr{
    padding:8px 8px 8px 8px;
    font-size:30px;
}

.low-stock-table th{
    padding-left: 8px;
}

.low-stock-table tr td{
    padding:8px 8px 8px 8px;
    color: #3d3934;
}

.menubutton a ul:hover,
.menubutton a ul:focus{
    text-decoration: none;
    outline: none;
    font-size: 2rem;
    font-weight: bold;
    background-color: #bfb8ae;
    color: white;
}

</style>