function checkFiles(files) {
    if(files.length>5) {
        alert("Caricati troppi files; Il limite è di 5");

        let list = new DataTransfer;
        for(let i=0; i<5; i++)
           list.items.add(files[i])

        document.getElementById('files').files = list.files
    }
}
