# rbxric
This project E-commerce for selling robux, money game in roblox

# penjelasan route
# 1. admin
# a. about admin
    - admin/home = dashboard
    - admin/list = daftar admin
    - admin/add  = tambah admin
    - admin/edit = edit admin
    - admin/profile = myprofile (profile admin)
# b. transaksi
    - admin/transaksi = history order
# c. kategori
    - admin/kategori = list kategori
    - admin/kategori/add = tambah kategori
    - admin/kategori/edit = edit kategori
# d. items
    - admin/items = list items
    - admin/items/add = tambah items
    - admim/items/edit = edit items


# Penjelasan Database
# -- Penjelasan schema --
Dibelakang nama tabel yang sebelum titik itu maksudnya schema atau seperti klasifikasi.
1. Common = Tabel utama atau tabel master
2. Admin = Tabel khusus admin
3. Relation = Tabel yang menyambungkan antar tabel
4. Trans = Tabel yang berhubungan dengan transaksi

# -- Penjelasan Template Field Tabel --
Setiap tabel pasti punya field BeginDate, EndDate, RecordID, CreateAt, ModifiedBy, ModifiedDate.
Penjelasan:
1. BeginDate = Field yang menjelaskan kapan si record diinput
2. EndDate = Field yang menjelaskan sampe kapan si record kadaluarsa. Default nya 31-12-9999, ketika si record dihapus, maka EndDate akan dirubah menjadi tanggal ketika dihapus. Dan untuk GET data, agar si yang di delete tidak terbawa, maka dibatasi yang EndDate nya melebihi dari tanggal saat melakukan GET
3. RecordID = Merupakan field identitas si record, field ini yang autoincrement. Kenapa dipisah antara RecordID dan Object ID? Object ID merupakan identitas item, bukan identitas record atau per baris dalam tabel. Dan yang dimunculkan atau ditarik oleh website itu hanya Object ID, karena RecordID itu tidak boleh terlihat.
4. CreateAt = Field yang menjelaskan kapan si record pertama kali dibuat.
5. ModifiedBy = Field yang menjelaskan oleh siapa di record diedit.
6. ModifiedDate = Field yang menjelaskan kapan record tersebut diedit.

# -- Penjelasan Tabel --
1. admin.admin = Tabel yang berisi akun untuk masuk ke website jalur admin.
2. common.pelanggan = Tabel yang berisi data pelanggan dari website.
3. common.usergroup = Tabel yang berisi grup-grup yang diinput dari website
4. common.parameter = Tabel untuk semua jenis record yang hanya informasi berupa nama. Contohnya untuk kategori item.
5. common.paketroblox = Tabel untuk paket-paket yang ada di website
6. relation.akunroblox = Tabel yang digunakan untuk menampung akun pengguna website
7. relation.membergroup = Tabel yang menghubungkan tiap akun dengan grup.
8. trans.pembelian = Tabel untuk history pembelian atau transaksi.
