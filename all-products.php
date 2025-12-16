<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <div class="layout">
    <?php include 'sidebar.php'; ?>

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
          <button class="btn-secondary">Export</button>
          <button class="btn-secondary">Import</button>
          <button class="btn-primary">+ Add Product</button>
        </div>
      </div>

      <main>
        <div class="table-card">
          <div class="toolbar">
            <div>
              <h2>All Products</h2>
              <div class="muted">Manage your product inventory</div>
            </div>
            <input class="input" placeholder="Search products...">
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>SKU</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th>Last Updated</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CLT-003</td>
                <td>Adidas Running Shoes</td>
                <td>Clothing</td>
                <td>5</td>
                <td>$109.99</td>
                <td><span class="status-badge status-warn">Low Stock</span></td>
                <td>2024-01-14</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>ELC-002</td>
                <td>Apple MacBook Pro</td>
                <td>Electronics</td>
                <td>12</td>
                <td>$2499.99</td>
                <td><span class="status-badge">In Stock</span></td>
                <td>2024-01-15</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>LIQ-002</td>
                <td>Grey Goose Vodka</td>
                <td>Liquor</td>
                <td>0</td>
                <td>$45.99</td>
                <td><span class="status-badge status-danger">Out of Stock</span></td>
                <td>2024-01-12</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>LIQ-001</td>
                <td>Jack Daniels 750ml</td>
                <td>Liquor</td>
                <td>8</td>
                <td>$29.99</td>
                <td><span class="status-badge status-warn">Low Stock</span></td>
                <td>2024-01-14</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>CLT-002</td>
                <td>Levi Jeans</td>
                <td>Clothing</td>
                <td>75</td>
                <td>$89.99</td>
                <td><span class="status-badge">In Stock</span></td>
                <td>2024-01-13</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>CLT-001</td>
                <td>Nike Air Max</td>
                <td>Clothing</td>
                <td>150</td>
                <td>$129.99</td>
                <td><span class="status-badge">In Stock</span></td>
                <td>2024-01-15</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>ELC-001</td>
                <td>Samsung 55" TV</td>
                <td>Electronics</td>
                <td>25</td>
                <td>$799.99</td>
                <td><span class="status-badge">In Stock</span></td>
                <td>2024-01-15</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>ELC-003</td>
                <td>Sony Headphones</td>
                <td>Electronics</td>
                <td>45</td>
                <td>$349.99</td>
                <td><span class="status-badge">In Stock</span></td>
                <td>2024-01-15</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
            </tbody>
          </table>
          <div class="toolbar" style="justify-content: space-between; margin-top:12px;">
            <div class="muted">Showing 8 of 8 products</div>
            <div style="display:flex; gap:8px;">
              <button class="btn-secondary">Previous</button>
              <button class="btn-secondary">Next</button>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
