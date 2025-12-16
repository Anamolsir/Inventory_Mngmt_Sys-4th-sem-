// Lightweight shared script for the static pages (no frameworks)
document.addEventListener("DOMContentLoaded", () => {
  initDashboard();
  fillActivity();
});

function initDashboard() {
  if (!document.getElementById("total-products")) return;

  const stats = {
    totalProducts: 1847,
    lowStock: 23,
    inventoryValue: 284590,
    monthlySales: 52340,
    trends: {
      products: "+12% from last month",
      lowStock: "5 new alerts",
      inventory: "+8% from last month",
      sales: "+18% from last month",
    },
  };

  const stockMovement = [
    { month: "Jan", inbound: 240, outbound: 180 },
    { month: "Feb", inbound: 300, outbound: 240 },
    { month: "Mar", inbound: 280, outbound: 220 },
    { month: "Apr", inbound: 360, outbound: 290 },
    { month: "May", inbound: 320, outbound: 260 },
    { month: "Jun", inbound: 400, outbound: 330 },
  ];

  const sales = [
    { month: "Jan", value: 4300 },
    { month: "Feb", value: 5600 },
    { month: "Mar", value: 4900 },
    { month: "Apr", value: 6600 },
    { month: "May", value: 7200 },
    { month: "Jun", value: 8100 },
  ];

  fillStats(stats);
  drawBars(stockMovement);
  drawLine(sales);
}

function fillStats(stats) {
  document.getElementById("total-products").textContent = stats.totalProducts.toLocaleString();
  document.getElementById("low-stock").textContent = stats.lowStock.toLocaleString();
  document.getElementById("inventory-value").textContent = formatMoney(stats.inventoryValue);
  document.getElementById("monthly-sales").textContent = formatMoney(stats.monthlySales);
  document.getElementById("trend-products").textContent = "↑ " + stats.trends.products;
  document.getElementById("trend-low-stock").textContent = "• " + stats.trends.lowStock;
  document.getElementById("trend-inventory").textContent = "↑ " + stats.trends.inventory;
  document.getElementById("trend-sales").textContent = "↑ " + stats.trends.sales;
}

function drawBars(stockMovement) {
  const container = document.getElementById("bar-chart");
  if (!container) return;
  const max = Math.max(...stockMovement.map((d) => Math.max(d.inbound, d.outbound)));
  stockMovement.forEach((d) => {
    const group = document.createElement("div");
    group.className = "bar-group";
    const barIn = document.createElement("div");
    const barOut = document.createElement("div");
    barIn.className = "bar in";
    barOut.className = "bar out";
    barIn.style.height = (d.inbound / max * 180 + 12) + "px";
    barOut.style.height = (d.outbound / max * 180 + 12) + "px";
    const label = document.createElement("div");
    label.className = "bar-label";
    label.textContent = d.month;
    group.appendChild(barIn);
    group.appendChild(barOut);
    group.appendChild(label);
    container.appendChild(group);
  });
}

function drawLine(sales) {
  const svg = document.getElementById("line-chart");
  if (!svg) return;
  const max = Math.max(...sales.map((d) => d.value));
  const w = svg.clientWidth || 600;
  const h = svg.clientHeight || 220;
  const stepX = w / (sales.length - 1);
  const pts = sales.map((d, i) => {
    const x = i * stepX;
    const y = h - (d.value / max) * (h - 30) - 10;
    return `${x},${y}`;
  });
  const polyline = document.createElementNS("http://www.w3.org/2000/svg", "polyline");
  polyline.setAttribute("fill", "none");
  polyline.setAttribute("stroke", "var(--accent-2)");
  polyline.setAttribute("stroke-width", "3");
  polyline.setAttribute("points", pts.join(" "));
  svg.appendChild(polyline);
  pts.forEach((p, i) => {
    const [x, y] = p.split(",").map(Number);
    const c = document.createElementNS("http://www.w3.org/2000/svg", "circle");
    c.setAttribute("cx", x);
    c.setAttribute("cy", y);
    c.setAttribute("r", 4);
    c.setAttribute("fill", "var(--accent-2)");
    c.setAttribute("data-label", sales[i].month + ": " + formatMoney(sales[i].value));
    svg.appendChild(c);
  });
}

function fillActivity() {
  const list = document.getElementById("activity-list");
  if (!list) return;
  const activities = [
    { title: "Nike Air Max", detail: "Added - Qty: 50", time: "2 hours ago" },
    { title: "Order O2012", detail: "Marked as shipped", time: "4 hours ago" },
    { title: "New customer", detail: "abc@mail.com registered", time: "6 hours ago" },
  ];
  activities.forEach((item) => {
    const row = document.createElement("div");
    row.className = "activity-item";
    const left = document.createElement("div");
    left.innerHTML = `<div class="activity-title">${item.title}</div><div class="activity-meta">${item.detail}</div>`;
    const right = document.createElement("div");
    right.className = "activity-meta";
    right.textContent = item.time;
    row.appendChild(left);
    row.appendChild(right);
    list.appendChild(row);
  });
}

function formatMoney(n) {
  return "$" + n.toLocaleString();
}

