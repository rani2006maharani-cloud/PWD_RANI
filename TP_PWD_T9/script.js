function confirmDelete(id) {
    let yakin = confirm("Yakin ingin menghapus data?");
    if (yakin) {
        window.location = "crud/hapus.php?id=" + id;
    }
}
