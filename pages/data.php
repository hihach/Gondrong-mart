<!-- header content -->
<div class="container">
  <div class="header-row">
    <div>
      <h2>Produk</h2>
      <div class="subtitle">
        Mengelola dan memperbarui data produk secara efisien.
      </div>
    </div>

    <div class="total-box">
      <div class="total-label">Total Produk</div>
      <div class="total-number" id="totalProduk">0</div>
    </div>
  </div>
</div>

<!-- table -->
<div class="container swing-in-top-fwd ">
  <div class="wrapper">
    <div class="card">
      <div class="top">
        <input
          type="text"
          class="search-input"
          placeholder="Cari produk..." />
        <a href="add.php" class="tambah-btn"><i class="bi bi-plus"></i> Tambah Produk</a>
      </div>

      <div class="table-box">
        <table>
          <thead>
            <tr >
              <th style="width: 30px">No</th>
              <th>Produk</th>
              <th style="width: 50px">Stok</th>
              <th>Harga</th>
              <th style="width: 50px">Aksi</th>
            </tr>
          </thead>

          <tbody>
            <!-- Data Dummy -->
            <tr data-id="1" data-nama="Produk A" data-harga="20000" data-stok="20" data-status="Tersedia">
              <td>1</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>20</td>
              <td>20.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>10</td>
              <td>35.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>7</td>
              <td>50.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>12</td>
              <td>90.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>6</td>
              <td>12.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>18</td>
              <td>77.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>11</td>
              <td>18.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>18</td>
              <td>77.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>11</td>
              <td>18.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>18</td>
              <td>77.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>11</td>
              <td>18.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>18</td>
              <td>77.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>11</td>
              <td>18.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>18</td>
              <td>77.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>11</td>
              <td>18.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>18</td>
              <td>77.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>11</td>
              <td>18.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>18</td>
              <td>77.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>11</td>
              <td>18.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>18</td>
              <td>77.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td class="td-nama">
                Produk A
              </td>
              <td>11</td>
              <td>18.000</td>
              <td>
                <button class="action-btn" onclick="showDropdown(event)">
                  ⋮
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
