<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Management</title>
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
            </select>
            <div class="muted" style="font-size:12px;">Retail Fashion</div>
          </div>
        </div>
        <div class="actions">
          <button class="btn-primary">+ Add New User</button>
        </div>
      </div>

      <main>
        <div style="margin-bottom: 12px;">
          <h1>User Management</h1>
          <div class="muted">Manage user accounts and permissions</div>
        </div>

        <div class="cards">
          <div class="card">
            <h3>Super Admins</h3>
            <div class="value">1</div>
          </div>
          <div class="card">
            <h3>Admins</h3>
            <div class="value">2</div>
          </div>
          <div class="card">
            <h3>Managers</h3>
            <div class="value">1</div>
          </div>
          <div class="card">
            <h3>Staff</h3>
            <div class="value">2</div>
          </div>
        </div>

        <div class="table-card">
          <div class="toolbar">
            <div>
              <h3>All Users</h3>
            </div>
            <input class="input" placeholder="Search users...">
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>User</th>
                <th>Contact</th>
                <th>Role</th>
                <th>Business</th>
                <th>Status</th>
                <th>Last Login</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Smith</td>
                <td>john.smith@example.com<br><span class="muted">+1 (555) 123-4567</span></td>
                <td><span class="tag" style="background:#e8eaff;">Super Admin</span></td>
                <td>All Businesses</td>
                <td><span class="status-badge">Active</span></td>
                <td>2 hours ago</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>Sarah Johnson</td>
                <td>sarah.j@example.com<br><span class="muted">+1 (555) 234-5678</span></td>
                <td><span class="tag" style="background:#e8eaff;">Admin</span></td>
                <td>Clothing Store</td>
                <td><span class="status-badge">Active</span></td>
                <td>5 hours ago</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>Mike Williams</td>
                <td>mike.w@example.com<br><span class="muted">+1 (555) 345-6789</span></td>
                <td><span class="tag" style="background:#e8f7ef;">Manager</span></td>
                <td>Liquor Store</td>
                <td><span class="status-badge">Active</span></td>
                <td>1 day ago</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>Emily Davis</td>
                <td>emily.d@example.com<br><span class="muted">+1 (555) 456-7890</span></td>
                <td><span class="tag" style="background:#e8eaff;">Admin</span></td>
                <td>Electronics Store</td>
                <td><span class="status-badge">Active</span></td>
                <td>3 hours ago</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>Tom Brown</td>
                <td>tom.b@example.com<br><span class="muted">+1 (555) 567-8901</span></td>
                <td><span class="tag" style="background:#eef2f7;">Staff</span></td>
                <td>Clothing Store</td>
                <td><span class="status-badge">Active</span></td>
                <td>4 hours ago</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
              <tr>
                <td>Lisa Anderson</td>
                <td>lisa.a@example.com<br><span class="muted">+1 (555) 678-9012</span></td>
                <td><span class="tag" style="background:#eef2f7;">Staff</span></td>
                <td>Liquor Store</td>
                <td><span class="status-badge status-danger">Inactive</span></td>
                <td>5 days ago</td>
                <td><button class="btn-icon">✏️</button> <button class="btn-icon">🗑️</button></td>
              </tr>
            </tbody>
          </table>
          <div class="toolbar" style="justify-content: space-between; margin-top:12px;">
            <div class="muted">Showing 6 of 6 users</div>
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
