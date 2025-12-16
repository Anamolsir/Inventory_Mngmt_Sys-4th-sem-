<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - Tax & Units</title>
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
          <h3>Tax Configuration</h3>
          <div class="form-grid" style="margin-top:12px;">
            <div class="form-field">
              <label>Default Tax Rate (%)</label>
              <input value="8.5">
            </div>
            <div class="form-field">
              <label>Tax ID / EIN</label>
              <input value="12-3456789">
            </div>
          </div>
          <div class="toggle-row">
            <div>
              <div class="toggle-label">Include Tax in Price</div>
              <div class="muted">Display prices with tax included</div>
            </div>
            <div class="pill">Toggle</div>
          </div>
          <div class="toggle-row">
            <div>
              <div class="toggle-label">Multiple Tax Rates</div>
              <div class="muted">Enable different tax rates for categories</div>
            </div>
            <div class="pill">Toggle</div>
          </div>
        </div>

        <div class="table-card" style="margin-top:12px;">
          <h3>Unit Configuration</h3>
          <div class="form-grid" style="margin-top:12px;">
            <div class="form-field">
              <label>Currency</label>
              <input value="USD - US Dollar">
            </div>
            <div class="form-field">
              <label>Weight Unit</label>
              <input value="Pounds (lbs)">
            </div>
            <div class="form-field">
              <label>Dimension Unit</label>
              <input value="Inches (in)">
            </div>
            <div class="form-field">
              <label>Volume Unit</label>
              <input value="Milliliters (ml)">
            </div>
          </div>
          <div style="margin-top:14px;">
            <button class="btn-primary">💾 Save Tax & Unit Settings</button>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
