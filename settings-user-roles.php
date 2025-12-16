<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - User Roles</title>
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
      </div>

      <main>
        <div style="margin-bottom: 12px;">
          <h1>Settings</h1>
          <div class="muted">Manage your business settings and preferences</div>
        </div>

        <div class="toolbar" style="margin-bottom: 0;">
          <a class="pill" href="settings-business.php">Business</a>
          <a class="pill" href="settings-tax.php">Tax & Units</a>
          <a class="pill" href="settings-user-roles.php">User Roles</a>
          <a class="pill" href="settings-notifications.php">Notifications</a>
        </div>

        <div class="table-card" style="margin-top:10px;">
          <h3>Role Permissions</h3>
          <div class="panel" style="margin-top:10px;">
            <h4>Super Admin</h4>
            <div class="muted">Full system access, manage all businesses, user management</div>
          </div>
          <div class="panel" style="margin-top:10px;">
            <h4>Admin</h4>
            <div class="muted">Manage inventory, view reports, manage categories</div>
          </div>
          <div class="panel" style="margin-top:10px;">
            <h4>Manager</h4>
            <div class="muted">Update inventory, view stock levels</div>
          </div>
          <div class="panel" style="margin-top:10px;">
            <h4>Staff</h4>
            <div class="muted">View inventory, record sales</div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
