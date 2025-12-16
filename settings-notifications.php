<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - Notifications</title>
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
          <h3>Alert Preferences</h3>
          <div class="toggle-row">
            <div>
              <div class="toggle-label">Low Stock Alerts</div>
              <div class="muted">Get notified when inventory is running low</div>
            </div>
            <div class="pill">Toggle</div>
          </div>
          <div class="toggle-row">
            <div>
              <div class="toggle-label">Expiry Alerts</div>
              <div class="muted">Receive alerts for items nearing expiry</div>
            </div>
            <div class="pill">Toggle</div>
          </div>
          <div class="toggle-row">
            <div>
              <div class="toggle-label">Email Notifications</div>
              <div class="muted">Receive notifications via email</div>
            </div>
            <div class="pill">Toggle</div>
          </div>
          <div class="toggle-row">
            <div>
              <div class="toggle-label">Daily Reports</div>
              <div class="muted">Get daily inventory summary reports</div>
            </div>
            <div class="pill">Toggle</div>
          </div>

          <div class="form-grid" style="margin-top:12px;">
            <div class="form-field">
              <label>Low Stock Threshold</label>
              <input value="10">
            </div>
            <div class="form-field">
              <label>Expiry Alert Days</label>
              <input value="30">
            </div>
          </div>
          <div style="margin-top:14px;">
            <button class="btn-primary">💾 Save Notification Settings</button>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
