function searchBuku() {
    let input = document.getElementById("search").value.toLowerCase();
    let table = document.getElementById("tabelBuku");
    let tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            let text = td.textContent.toLowerCase();
            tr[i].style.display = text.includes(input) ? "" : "none";
        }
    }
}
