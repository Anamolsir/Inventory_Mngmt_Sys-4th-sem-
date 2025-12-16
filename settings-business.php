<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - Business</title>
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
          <h3>Business Information</h3>
          <div class="form-grid" style="margin-top:12px;">
            <div class="form-field">
              <label>Business Name</label>
              <input value="Clothing Store">
            </div>
            <div class="form-field">
              <label>Business Type</label>
              <input value="Retail">
            </div>
            <div class="form-field">
              <label>Email Address</label>
              <input value="store@example.com">
            </div>
            <div class="form-field">
              <label>Phone Number</label>
              <input value="+1 (555) 123-4567">
            </div>
            <div class="form-field">
              <label>Business Address</label>
              <input value="123 Main St, Suite 100">
            </div>
            <div class="form-field">
              <label>City</label>
              <input value="New York">
            </div>
            <div class="form-field">
              <label>State/Province</label>
              <input value="NY">
            </div>
            <div class="form-field">
              <label>ZIP/Postal Code</label>
              <input value="10001">
            </div>
          </div>
          <div style="margin-top:14px;">
            <button class="btn-primary">💾 Save Business Settings</button>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
