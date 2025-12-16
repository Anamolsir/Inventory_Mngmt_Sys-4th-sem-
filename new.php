<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory Pro Dashboard</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
  <div class="layout">
    <?php include 'sidebar.php'; ?>

    <div class="content">
      <div class="topbar">
        <div class="top-left">
          <div>
            <div style="font-weight:700;">Business:
              <select aria-label="Choose business">
                <option>Clothing Store </option>
                <option>Electronics</option>
                <option>Home Goods</option>
              </select>
              <!-- <div class="muted" style="font-size:12px;">Retail Fashion</div> -->
            </div>
          </div>
        </div>
        <div class="actions">
          <span class="pill">🔔</span>
          <span class="pill">🌙</span>
          <span class="pill">😀 Admin User</span>
        </div>
      </div>
      <div class="main-content">
      <div style="margin-bottom: 12px;">
        <h1 style="margin: 32px 4px 0 ;">Dashboard</h1>
        <div class="muted">Welcome back! Here's what's happening with Clothing Store today.</div>
      </div>

      <main>
        <section class="cards">
          <a class="card" href="../Inventory_List.php">
            <h3>📦 Total Products</h3>
            <div class="value" id="total-products">0</div>
            <div class="trend" id="trend-products">↑ from last month</div>
          </a>
          <a class="card" href="../Inventory_List.php#low-stock">
            <h3>⚠️ Low Stock Items</h3>
            <div class="value" id="low-stock">0</div>
            <div class="trend warn" id="trend-low-stock">• alerts</div>
          </a>
          <a class="card" href="../Inventory_List.php">
            <h3>💰 Inventory Value</h3>
            <div class="value" id="inventory-value">$0</div>
            <div class="trend" id="trend-inventory">↑ from last month</div>
          </a>
          <a class="card" href="../order_list.php">
            <h3>📈 Monthly Sales</h3>
            <div class="value" id="monthly-sales">$0</div>
            <div class="trend" id="trend-sales">↑ from last month</div>
          </a>
        </section>

        <section class="grid-2">
          <div class="panel panel-width">
            <h3>Stock Movement</h3>

            <div class="chart">
              <div class="bar-group">
                <div class="bar in" style="height:70px"></div>
                <div class="bar out" style="height:80px"></div>
                <div class="bar-label">Jan</div>
              </div>

              <div class="bar-group">
                <div class="bar in" style="height:40px"></div>
                <div class="bar out" style="height:100px"></div>
                <div class="bar-label">Feb</div>
              </div>

              <div class="bar-group">
                <div class="bar in" style="height:80px"></div>
                <div class="bar out" style="height:50px"></div>
                <div class="bar-label">Mar</div>
              </div>

              <div class="bar-group">
                <div class="bar in" style="height:80px"></div>
                <div class="bar out" style="height:100px"></div>
                <div class="bar-label">Apr</div>
              </div>

              <div class="bar-group">
                <div class="bar in" style="height:110px"></div>
                <div class="bar out" style="height:70px"></div>
                <div class="bar-label">May</div>
              </div>

              <div class="bar-group">
                <div class="bar in" style="height:170px"></div>
                <div class="bar out" style="height:20px"></div>
                <div class="bar-label">Jun</div>
              </div>
            </div>

            <div class="legend">
              <span><i style="background:var(--accent)"></i>Inbound</span>
              <span><i style="background:var(--warn)"></i>Outbound</span>
            </div>
          </div>
        
          <div class="panel panel-width">
          <h3>Monthly Sales</h3>
          
          </div>

        </section>

        <section class="recent">
          <h3 style="padding: 10px 4px;">Recent Activity</h3>
          <div id="activity-list"></div>
          <div class="activity-item">
            <div>
              <div class="activity-title">Nike Air Max</div>
              <div class="activity-meta">Added • Qty: 50</div>
            </div>
            <div class="activity-meta">2 hours ago</div>
          </div>

          <div class="activity-item">
            <div>
              <div class="activity-title">MacBook Pro</div>
              <div class="activity-meta">Updated price</div>
            </div>
            <div class="activity-meta">5 hours ago</div>
          </div>

          
        </section>
      </main>
    </div>
  </div>
</div>
<a class="cta" href="../inventory_Main.php" style ="text-align: center;">Switch to Admin</a>
</body>

</html>