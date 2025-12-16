<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clothing Inventory</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <div class="layout">
    <aside class="sidebar">
      <div>
        <div class="logo">InventoryPro</div>
        <div class="role">Super Admin</div>
      </div>
      <div class="nav-section">
        <a class="nav-link" href="new.php">Dashboard</a>
      </div>
      <div class="nav-section">
        <div class="nav-title">Inventory</div>
        <a class="nav-link" href="all-products.php">All Products</a>
        <a class="nav-link active" href="clothing.php">Clothing</a>
        <a class="nav-link" href="#liquor">Liquor</a>
        <a class="nav-link" href="#electronics">Electronics</a>
      </div>
      <div class="nav-section">
        <a class="nav-link" href="user-management.php">User Management</a>
        <a class="nav-link" href="settings-business.php">Settings</a>
      </div>
    </aside>

    <div class="content">
      <div class="topbar">
        <div class="top-left">
          <div>
            <div style="font-weight:700;">Business:</div>
            <select>
              <option>Clothing Store</option>
              <option>Electronics</option>
              <option>Liquor</option>
            </select>
            <div class="muted" style="font-size:12px;">Retail Fashion</div>
          </div>
        </div>
        <div class="actions">
          <button class="btn-primary">+ Add Clothing Product</button>
        </div>
      </div>

      <main>
        <div style="margin-bottom: 12px;">
          <h1>Clothing Inventory</h1>
          <div class="muted">Category-specific inventory management</div>
        </div>

        <div class="table-card">
          <div class="toolbar">
            <div>
              <h3>Clothing Products</h3>
            </div>
            <input class="input" placeholder="Search products...">
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>SKU</th>
                <th>Product Name</th>
                <th>Brand</th>
                <th>Size</th>
                <th>Color</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CLT-001</td>
                <td>Nike Air Max</td>
                <td>Nike</td>
                <td>M</td>
                <td>Black</td>
                <td>150</td>
                <td>$129.99</td>
                <td><span class="status-badge">In Stock</span></td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>CLT-002</td>
                <td>Levi Jeans</td>
                <td>Levi's</td>
                <td>32</td>
                <td>Blue</td>
                <td>75</td>
                <td>$89.99</td>
                <td><span class="status-badge">In Stock</span></td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>CLT-003</td>
                <td>Adidas Running Shoes</td>
                <td>Adidas</td>
                <td>L</td>
                <td>White</td>
                <td>5</td>
                <td>$109.99</td>
                <td><span class="status-badge status-warn">Low Stock</span></td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>CLT-004</td>
                <td>North Face Jacket</td>
                <td>North Face</td>
                <td>XL</td>
                <td>Red</td>
                <td>30</td>
                <td>$249.99</td>
                <td><span class="status-badge">In Stock</span></td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
</body>
</html>

