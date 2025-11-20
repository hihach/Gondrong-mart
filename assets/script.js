/* =========================================================
   DROPDOWN ACTION BUTTON
========================================================= */
let activeRow = null;
let currentDataId = null; 

function showDropdown(event) {
  event.stopPropagation();

  const dropdown = document.getElementById("dropdown");
  const btn = event.currentTarget;
  const rect = btn.getBoundingClientRect();
  const row = btn.closest("tr");

  currentDataId = row.dataset.id;

  if (activeRow && activeRow !== row) {
    activeRow.classList.remove("row-active");
  }

  row.classList.add("row-active");
  activeRow = row;

  dropdown.style.left = rect.right + window.scrollX + 5 + "px";
  dropdown.style.top = rect.top + window.scrollY + "px";

  dropdown.style.display = "block";
}

function showDetail(event) {
  event.preventDefault(); 

  const dropdown = document.getElementById("dropdown");
  dropdown.style.display = "none";

  const detail = document.getElementById("detail");
  detail.style.display = "block";


  loadDetailData(currentDataId);
}

/* =========================================================
   DETAIL 
========================================================= */function closeDetail() {
  const detail = document.getElementById("detail");
  detail.style.display = "none";

  if (activeRow) {
    activeRow.classList.remove("row-active");
    activeRow = null;
  }
  currentDataId = null;
}

function loadDetailData(id) {
  if (activeRow) {
    document.getElementById("detail-id").textContent = activeRow.dataset.id;
    document.getElementById("detail-nama").textContent = activeRow.dataset.nama;
    document.getElementById("detail-harga").textContent =
      activeRow.dataset.harga;
    document.getElementById("detail-stok").textContent = activeRow.dataset.stok;
    document.getElementById("detail-status").textContent = activeRow.dataset.status;
  } else {
    document.getElementById("detail-id").textContent = id;
    document.getElementById("detail-nama").textContent = "Memuat...";
    document.getElementById("detail-harga").textContent = "Memuat...";
    document.getElementById("detail-stok").textContent = "Memuat...";
    document.getElementById("detail-status").textContent = "Memuat...";
  }
}

window.onclick = function (event) {
  const detail = document.getElementById("detail");
  if (event.target == detail) {
    closeDetail();
  }
};

/* =========================================================
   ANIMATION
========================================================= */

window.addEventListener("pageshow", (event) => {
  const el = document.querySelector(".swing-in-top-fwd");

  if (!el) return;

  // remove kelas dulu
  el.classList.remove("swing-in-top-fwd");

  // trigger reflow
  void el.offsetWidth;

  // tambahkan lagi untuk memulai animasi
  el.classList.add("swing-in-top-fwd");
});
