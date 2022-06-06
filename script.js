window.addEventListener("load", function () {
    // GET ALL NEWS
    var news = document.getElementsByClassName("new-wrap");
   
    // LOOP THROUGH ALL NEWS
    for (let new of news) {
      // ON CLICKING A new
      new.addEventListener("click", function () {
        // GET SELECTED new ID, NAME, DESCRIPTION
        var id = this.dataset.id,
            name = this.getElementsByClassName("new-title")[0].innerHTML,
            desc = this.getElementsByClassName("new-desc")[0].innerHTML;
   
        // SHOW IN DIALOG BOX
        alert(`Tu as sélectionné - ID: ${id}, TITLE: ${name} DESC: ${desc}`);
      });
    }
  });