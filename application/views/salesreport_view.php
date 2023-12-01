<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="spad">	
  <div class="container">
    <h2 class="chart-title">Sales Performance (Jan-May 2023)</h2>
    <div class="chart-container">
      <canvas id="myChart"></canvas>
    </div>
  </div>

  <script>
    // Get the canvas element for the first chart
    const canvas1 = document.getElementById('myChart');

    // Create the first chart
    new Chart(canvas1, {
      type: 'bar', // Specify the chart type as bar
      data: {
        labels: ['January', 'February', 'March', 'April', 'May'], // X-axis labels
        datasets: [{
          label: 'Sales', // Label for the dataset
          data: [120, 200, 150, 180, 220], // Data for the bar chart
          backgroundColor: 'rgba(75, 192, 192, 0.2)', // Bar color
          borderColor: 'rgba(75, 192, 192, 1)', // Border color
          borderWidth: 1 // Border width
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true // Start the y-axis at zero
          }
        }
      }
    });
  </script>

  <div class="container">
    <h2 class="chart-title">Sales Performance (Jan-May 2023)</h2>
    <div class="chart-container">
      <canvas id="myChart2"></canvas>
    </div>
  </div>

  <script>
    // Get the canvas element for the second chart
    const canvas2 = document.getElementById('myChart2');

    // Create the second chart
    new Chart(canvas2, {
      type: 'line', // Specify the chart type as line
      data: {
        labels: ['January', 'February', 'March', 'April', 'May'], // X-axis labels
        datasets: [{
          label: 'Sales', // Label for the dataset
          data: [120, 200, 150, 180, 220], // Data for the line graph
          backgroundColor: 'rgba(75, 192, 192, 0.2)', // Area color
          borderColor: 'rgba(75, 192, 192, 1)', // Line color
          borderWidth: 1, // Line width
          pointRadius: 3, // Point radius
          pointBackgroundColor: 'rgba(75, 192, 192, 1)', // Point color
          pointBorderColor: 'rgba(75, 192, 192, 1)', // Point border color
          pointHoverRadius: 6, // Point hover radius
          pointHoverBackgroundColor: 'rgba(75, 192, 192, 1)', // Point hover color
          pointHoverBorderColor: 'rgba(75, 192, 192, 1)' // Point hover border color
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true // Start the y-axis at zero
          }
        }
      }
    });
  </script>

<div class="table-container">
  <h2 >Transaction History</h2>
  <table>
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Quantity Sold</th>
        <th>Date of Transaction</th>
        <th>Remaining Stock</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Product A</td>
        <td>Category 1</td>
        <td>10</td>
        <td>2023-06-15</td>
        <td>90</td>
      </tr>
      <tr>
        <td>Product B</td>
        <td>Category 2</td>
        <td>5</td>
        <td>2023-06-14</td>
        <td>35</td>
      </tr>
      <!-- Add more rows for additional transactions -->
    </tbody>
  </table>
</div>
<div class="image-container">
  <img src="https://about.crunchbase.com/wp-content/uploads/2023/04/Illustration-1.jpg" alt="Image Description">
</div>
</section>
<style>
    /* CSS styles for the inventory view page */
    body {
      margin: 0;
      padding: 0;
      background-color: rgba(0, 0, 0, 0);
    }
    
    .header {
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin-top: 0;
    }

    .chart-title {
      text-align: center;
      margin-top: 20px;
      margin-bottom: 50px; /* Adjust the margin as needed */
    }

    .chart-container {
      display: flex;
      justify-content: center;
      margin: 0 auto;
      max-width: 600px; /* Adjust the maximum width as needed */
    }

    .table-container {
      margin: 20px auto;
      margin-top: 100px;
      max-width: 600px;
    }

    .table-container h2{
    	text-align: center;
    	margin: 20px 0;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      text-align: center;
      color: #3d3934;
    }

    th {
      background-color: #3d3934;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
    }

    canvas {
      max-width: 100%;
    }

    .image-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* Adjust as needed */
    }

    .image-container img {
      max-width: 50%; /* Adjust as needed */
      max-height: 50%; /* Adjust as needed */
    }
  </style> 
