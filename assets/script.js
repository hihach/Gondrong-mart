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
    const btnEdit = document.getElementById("btn-edit");
    const btnHapus = document.getElementById("btn-hapus");
    if (currentDataId) {
        btnEdit.href = "index.php?page=edit&id_produk=" + currentDataId;
        btnHapus.href = "index.php?action=hapus&id_produk=" + currentDataId;
    } else {
        console.error("Waduh, ID-nya kosong brok!");
    }

    if (activeRow && activeRow !== row) {
        activeRow.classList.remove("row-active");
    }

    row.classList.add("row-active");
    activeRow = row;

    dropdown.style.left = rect.right + window.scrollX + 5 + "px";
    dropdown.style.top = rect.top + window.scrollY + "px";

    dropdown.style.display = "block";
}
const rupiah = (number) => {
    return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
    }).format(number);
};
function showDetail(event) {
    event.preventDefault();
    event.stopPropagation();
    const dropdown = document.getElementById("dropdown");
    dropdown.style.display = "none";

    const detail = document.getElementById("detail");
    detail.style.display = "block";

    loadDetailData(currentDataId);
}

/* =========================================================
   DETAIL 
========================================================= */
function closeDetail() {
    const detail = document.getElementById("detail");
    detail.style.display = "none";

    if (activeRow) {
        activeRow.classList.remove("row-active");
        activeRow = null;
    }
}

window.onclick = function(event) {
    const detail = document.getElementById("detail");
    const dropdown = document.getElementById("dropdown");

    if (event.target == detail) {
        closeDetail();
    }
    if (dropdown) {
        // Cek apakah kliknya di tombol titik tiga?
        const isClickOnButton = event.target.closest(".action-btn");

        // Cek apakah kliknya di dalam kotak dropdown itu sendiri?
        const isClickInsideDropdown = dropdown.contains(event.target);

        // Kalau KLIKNYA DI LUAR (Bukan tombol && Bukan dropdown)
        if (!isClickOnButton && !isClickInsideDropdown) {
            dropdown.style.display = "none";

            // Reset warna baris tabel
            if (activeRow) {
                activeRow.classList.remove("row-active");
                activeRow = null;
            }
        }
    }
};
function loadDetailData(id) {
    if (activeRow) {
        const data = activeRow.dataset;
        document.getElementById("detail-id").textContent = data.id;
        document.getElementById("detail-nama").textContent = data.nama;
        document.getElementById("detail-harga").textContent = rupiah(data.harga);

        document.getElementById("detail-stok").textContent = data.stok + " Pcs";
        const statusElem = document.getElementById("detail-status");
        statusElem.textContent = data.status;
        statusElem.style.color = data.status === "Tersedia" ? "green" : "red";
    } else {
        document.getElementById("detail-id").textContent = id;
        document.getElementById("detail-nama").textContent = "Memuat...";
        document.getElementById("detail-harga").textContent = "Memuat...";
        document.getElementById("detail-stok").textContent = "Memuat...";
        document.getElementById("detail-status").textContent = "Memuat...";
    }
}

window.onclick = function(event) {
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
